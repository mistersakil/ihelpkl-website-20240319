@props(['metaTitle' => 'default page title', 'module' => 'default module', 'imageUrl'])
<div class="inner-banner" style="background-image:url({{ $imageUrl }})">
    <div class="container">
        <div class="inner-title text-center">
            <h3>
                {{ __($metaTitle) }}
            </h3>
            <ul>
                <li>
                    <a wire:navigate href="{{ route('web.home') }}">
                        {{ __('home') }}
                    </a>
                </li>
                <li>
                    {{ __($module) }}
                </li>
            </ul>
        </div>
    </div>
</div>
