import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import path from "path";
export default defineConfig({
    resolve: { alias: { "@": path.resolve(__dirname, "resources/assets") } },
    plugins: [
        laravel({
            input: ["resources/sass/main.scss", "resources/js/main.js"],
            refresh: true,
        }),
    ],
});
