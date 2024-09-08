export default {
    content: [
        "./resources/views/**/*.blade.php", // Если используешь Blade (Laravel)
        "./resources/js/**/*.vue", // Если используешь Vue.js
        "./resources/js/**/*.jsx", // Если используешь React
        "./src/**/*.{html,js}", // Для любых HTML и JS файлов
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};
