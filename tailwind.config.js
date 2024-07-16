import franken from "franken-ui/shadcn-ui/preset-quick";

/** @type {import('tailwindcss').Config} */
export default {
    presets: [franken({ theme: "green" })],
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],
    safelist: [
        {
            pattern: /^uk-/,
        },
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};
