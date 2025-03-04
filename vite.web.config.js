import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";

export default defineConfig({
    plugins: [
        laravel({
            hotFile: "public/web.hot",
            buildDirectory: "buildWeb",
            input: ["resources/assets/web/web-js.js"],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            "@imgWeb": path.resolve(__dirname, "resources/assets/web/images"),
        },
    },
});
