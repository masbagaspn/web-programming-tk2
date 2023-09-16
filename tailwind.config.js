/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php"],
    theme: {
        extend: {
            fontFamily: {
                inter: ["Inter", "sans-serif"],
            },
            keyframes: {
                alert: {
                    "0%": {
                        visibility: "visible",
                        opacity: 0,
                        transform: "translateX(200%)",
                    },
                    "10%, 80%": { opacity: 1, transform: "translateX(0)" },
                    "90%": { opacity: 0, transform: "translateX(200%)" },
                    "100%": { visibility: "hidden" },
                },
            },
            animation: {
                alert: "alert 4s ease-in-out",
            },
            gridTemplateRows: {
                10: "repeat(10, minmax(0, 1fr))",
            },
        },
    },
    plugins: [],
};
