import Chart from "chart.js/auto";

const keys = Object.keys(gradeMarks);
const data = [];

for (let key of keys) {
    const mark = key;
    const total = gradeMarks[key];
    data.push({ x: mark, y: total });
}

const ctx = document.getElementById("chart-container");

new Chart(ctx, {
    type: "bar",
    data: {
        labels: keys,
        datasets: [
            {
                label: "Number of Student",
                data: data,
                borderWidth: 1,
                backgroundColor: "rgb(147,197,253)",
            },
        ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                ticks: {
                    callback: function (value, index, ticks) {
                        if (Math.floor(value) === value) {
                            return value;
                        }
                    },
                },
            },
        },
    },
});
