<?php

namespace App\Services;

use Exception;
use App\Models\Slider;
use Illuminate\Validation\Rule;
use App\Services\FileUploadService;
use Illuminate\Support\Facades\Vite;
use Illuminate\Validation\Rules\File;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

/**
 * @author Sakil Jomadder <sakil.diu.cse@gmail.com>
 */
class SliderService
{
    private string $modelClass = Slider::class;
    protected FileUploadService $fileUploadService;
    public string $disk = 'uploads';
    public string $uploadDirectory = 'sliders';
    public int $maxFileUploadSize = (1024 * 5);
    public array $supportedImgTypes = ['jpg', 'jpeg', 'webp', 'png'];
    public array $imgResizeOptions = [
        'height' => 675,
        'width' => 865,
        'position' => 'center'
    ];


    /**
     * Create a new object instance
     */
    public function __construct()
    {
        $this->fileUploadService = new FileUploadService();
    }

    /**
     * Get model details by ID
     */
    public function getModelById(int $id)
    {
        return $this->modelClass::find($id);
    }


    /**
     * Get a single model based on order direction
     * @param string $orderDirection [asc || desc]
     * @return \App\Models\Slider
     */
    public function getOnlyModelByOrderDirection(string $orderDirection = 'asc'): mixed
    {
        return $this->modelClass::orderBy('order', $orderDirection)->first();
    }

    /**
     *  Method to get the previous record
     */
    public function previousModel($orderNo)
    {
        return $this->modelClass::where('order', '<', $orderNo)->orderBy('order', 'desc')->first();
    }


    /*
    *  Method to get the next record
    */
    public function nextModel($orderNo)
    {
        return $this->modelClass::where('order', '>', $orderNo)->orderBy('order', 'asc')->first();
    }

    /*
    * Swapping two model order
    * @return bool
    */
    public function swapOrder(int $modelId, string $type): bool
    {
        $targetedModel = $this->getModelById($modelId);
        $targetedModelOrder = $targetedModel->order;
        if ($type === 'UP') {
            $previousModel =  $this->previousModel($targetedModel->order);
            $targetedModel->order = $previousModel->order;
            $targetedModel->save();

            ## Update previous model order
            $previousModel->order = $targetedModelOrder;
            $previousModel->save();
            return true;
        } else if ($type === 'DOWN') {
            $nextModel =  $this->nextModel($targetedModel->order);
            $targetedModel->order = $nextModel->order;
            $targetedModel->save();

            ## Update next model order
            $nextModel->order = $targetedModelOrder;
            $nextModel->save();

            return true;
        }
        return false;
    }


    /**
     * Collections of model with search and filter
     * @param array $filterOptions
     * @return mixed
     */
    public function getFilteredModels(array $filterOptions = []): mixed
    {
        @['perPage' => $perPage, 'select' => $select, 'orderBy' => $orderBy, 'orderDirection' => $orderDirection, 'searchText' => $searchText] = $filterOptions;

        return $this->modelClass::when(isset($searchText), function ($query) use ($searchText) {
            $searchText = "%$searchText%";
            return $query->where('slider_title', 'like', $searchText)
                ->orWhere('slider_body', 'like', $searchText)
                ->orWhere('slider_link', 'like', $searchText)
                ->orWhere('slider_link_text', 'like', $searchText);
        })
            ->when(isset($select), function ($query) use ($select) {
                return $query->select($select);
            })
            ->when(isset($orderBy) && isset($orderDirection), function ($query) use ($orderBy, $orderDirection) {
                return $query->orderBy($orderBy, $orderDirection);
            }, function ($query) {
                return $query->orderBy('id', 'asc');
            })
            ->when(isset($perPage), function ($query) use ($perPage) {
                return  $query->paginate($perPage);
            }, function ($query) {
                return $query->paginate(10);
            });
    }

    /**
     * Validation error messages for state properties of the component
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAllModel(int $paginate = 5)
    {
        $data = $this->modelClass::orderBy('order', 'asc')->paginate($paginate);
        return $data;
    }

    /**
     * Count all records from table
     * @return int
     */
    public function countAllModel()
    {
        $count = $this->modelClass::count();
        return $count;
    }

    /**
     * To generate last order number when to insert new model
     * @return int
     */
    public function generateLastOrderNo()
    {
        $lastModelBasedOnOrderAttribute = $this->getOnlyModelByOrderDirection('desc');
        return $lastModelBasedOnOrderAttribute ? $lastModelBasedOnOrderAttribute->order + 1 : 1;
    }

    /**
     * Create new record
     * @param array $inputs [Input properties to create new record]
     * @return mixed
     */
    public function createModel(array $inputs): mixed
    {
        try {
            $sliderImageTmpFile = $inputs['slider_image'];

            ## Throw exception if no file selected to upload
            if (!$sliderImageTmpFile instanceof TemporaryUploadedFile) {
                throw new Exception(__('nothing to upload'));
            }

            ## Get image hashed name
            $sliderImageHashedName = (string) $this->fileUploadService->setHashedNameForTmpUploadedFile($sliderImageTmpFile, $inputs['user_id']);

            ## Upload file to local storage
            $this->fileUploadService->uploadFilToLocalStorage(uploadDirectory: $this->uploadDirectory, disk: $this->disk, fileName: $sliderImageHashedName, tmpFile: $sliderImageTmpFile);

            ## Resize image using image intervention package
            $this->fileUploadService->resizeImage(uploadDirectory: $this->uploadDirectory, disk: $this->disk, fileName: $sliderImageHashedName, dimensions: $this->imgResizeOptions);

            ## Create new record
            $inputs['slider_image'] = $sliderImageHashedName;
            $inputs['is_active'] = $inputs['is_active'] ? '1' : '0';

            return $this->modelClass::create($inputs);
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage());
        }
    }

    /**
     * Update existing recode
     * @param array $inputs [Input properties to create new record]
     * @return mixed
     */
    public function updateModel(int $id, array $inputs): mixed
    {
        try {
            $sliderImageTmpFile = $inputs['slider_image'];

            ## Throw exception if no file selected to upload
            if (!empty($sliderImageTmpFile) && $sliderImageTmpFile instanceof TemporaryUploadedFile) {

                ## Get image hashed name
                $sliderImageHashedName = (string) $this->fileUploadService->setHashedNameForTmpUploadedFile($sliderImageTmpFile, $inputs['user_id']);

                ## Upload file to local storage
                $this->fileUploadService->uploadFilToLocalStorage(uploadDirectory: $this->uploadDirectory, disk: $this->disk, fileName: $sliderImageHashedName, tmpFile: $sliderImageTmpFile);

                ## Delete image from storage
                $this->fileUploadService->removeFilesFromStorage(disk: 'uploads', childDirectory: 'sliders', file: $inputs['sliderExistingImg']);

                ## Resize image using image intervention package
                $this->fileUploadService->resizeImage(uploadDirectory: $this->uploadDirectory, disk: $this->disk, fileName: $sliderImageHashedName, dimensions: $this->imgResizeOptions);

                $inputs['slider_image'] = $sliderImageHashedName;
            } else {
                $inputs['slider_image'] = $inputs['sliderExistingImg'];
            }

            unset($inputs['sliderExistingImg']);
            $inputs['is_active'] = $inputs['is_active'] ? '1' : '0';

            ## Update existing record
            return $this->modelClass::where(['id' => $id])->update($inputs);
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage());
        }
    }



    /**
     * Alias of state attributes
     * @return array
     */
    public function validationAttributesSurname()
    {
        return [
            'slider_title' => __('title'),
            'slider_body' => __('body'),
            'slider_image' => __('slider'),
        ];
    }

    /**
     * Validation rules of the component
     * @return array
     */
    public function validationRules(bool $isSometimes = false)
    {
        return [
            'slider_title' => ['required', 'min:10', 'max:100'],
            'slider_body' => ['required', 'min:10', 'max:100'],
            'slider_link' => ['nullable', 'min:10', 'max:100'],
            'order' => ['required'],
            'is_active' => ['required'],
            'slider_link_text' => ["required_with:slider_link", 'nullable', 'string', 'min:2', 'max:20'],
            'slider_image' => [
                $isSometimes ? 'sometimes' : 'required',
                "max:{$this->maxFileUploadSize}",
                File::image()
                    ->types($this->supportedImgTypes)
                    ->dimensions(Rule::dimensions()
                        ->minWidth($this->imgResizeOptions['width'])
                        ->minHeight($this->imgResizeOptions['height']))
            ],
        ];
    }

    /**
     * Validation error messages for state properties of the component
     * @return array
     */
    public function validationErrorMessages()
    {
        return [
            'slider_title.required' => __('can not be empty', [':attribute']),
            'slider_title.min' => __('minimum character length', [':min', ':attribute']),
            'slider_title.max' => __('maximum character length', [':max', ':attribute']),
            'slider_body.required' => __('can not be empty', [':attribute']),
            'slider_body.min' => __('minimum character length', [':min', ':attribute']),
            'slider_body.max' => __('maximum character length', [':max', ':attribute']),
            'slider_image.required' => __('image required', [':attribute']),
            'slider_image.image' => __('must be an image', [':attribute']),
            'slider_image.mimes' => __('must be of type image', [':attribute']),
            'slider_image.max' =>  __('translations.image_max_size_mb', ['size' => $this->maxFileUploadSize / 1024]),
            'slider_image.dimensions' => __('translations.image_minimum_dimension', ['minHeight' => $this->imgResizeOptions['height'], 'minWidth' => $this->imgResizeOptions['width']]),

        ];
    }


    /**
     * Validation error messages for state properties of the component
     * @return \App\Models\Slider
     */
    public function changeStatus(int $id, bool $isActive)
    {
        try {
            $model = $this->modelClass::find($id);
            $model->is_active = $isActive ? '1' : '0';
            $model = $model->save();
            return $model;
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage());
        }
    }

    /**
     * Delete model from database
     * @return void
     */
    public function  deleteModel($modelId): mixed
    {
        try {
            ## Find model first
            $model = $this->modelClass::find($modelId);

            ## Delete image from storage
            $this->fileUploadService->removeFilesFromStorage(disk: 'uploads', childDirectory: 'sliders', file: $model->slider_image);

            ## Delete model
            $model->delete();
            return $model;
        } catch (\Throwable $th) {
            throw new Exception($th->getMessage());
        }
    }


    /**
     * Get static models
     * 
     * @param int $limit
     * @return array
     */
    public function getStaticModels(int $limit = 5)
    {

        return [
            [
                'title' => "Advanced CRM, Ticketing, and Lead Management Tools",
                'slider_image' => Vite::imageWeb('slider-crm.png'),
            ],
            [
                'title' => "Effortless application integration to Boost your business",
                'slider_image' => Vite::imageWeb('home-two-img2.jpg'),
            ],
            [
                'title' => "Top Custom Web Development Solutions",
                'slider_image' => Vite::imageWeb('home-two-img3.jpg'),
            ],
        ] ?? [];
    }
}
