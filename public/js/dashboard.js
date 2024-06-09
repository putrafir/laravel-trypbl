// ApexCharts options and config
window.addEventListener("load", function () {
    const getChartOptions = () => {
        return {
            series: [220, 147],
            colors: ["#3b82f6", "#16BDCA"],
            chart: {
                height: 320,
                width: "75%",
                type: "donut",
            },
            stroke: {
                colors: ["transparent"],
                lineCap: "",
            },

            plotOptions: {
                pie: {
                    donut: {
                        labels: {
                            show: true,
                            name: {
                                show: true,
                                fontFamily: "Inter, sans-serif",
                                offsetY: 20,
                            },
                            total: {
                                showAlways: true,
                                show: true,
                                label: "Total Pendaftar",
                                fontFamily: "Inter, sans-serif",
                                formatter: function (w) {
                                    const sum = w.globals.seriesTotals.reduce(
                                        (a, b) => {
                                            return a + b;
                                        },
                                        0,
                                    );
                                    return `${sum}`;
                                },
                            },
                            value: {
                                show: true,
                                fontFamily: "Inter, sans-serif",
                                offsetY: -20,
                                formatter: function (value) {
                                    return value;
                                },
                            },
                        },
                        size: "78%",
                    },
                },
            },
            grid: {
                padding: {
                    top: -2,
                },
            },
            labels: ["Alumni MTS", "Bukan alumni"],

            dataLabels: {
                enabled: false,
            },
            legend: {
                position: "right",
                offsetY: 70,
                offsetX: -36,
                fontFamily: "Inter, sans-serif",
            },
            yaxis: {
                labels: {
                    formatter: function (value) {
                        return value;
                    },
                },
            },
            xaxis: {
                labels: {
                    formatter: function (value) {
                        return value;
                    },
                },
                axisTicks: {
                    show: false,
                },
                axisBorder: {
                    show: false,
                },
            },
        };
    };

    if (
        document.getElementById("donut-chart") &&
        typeof ApexCharts !== "undefined"
    ) {
        const chart = new ApexCharts(
            document.getElementById("donut-chart"),
            getChartOptions(),
        );
        chart.render();

        // Get all the checkboxes by their class name
        const checkboxes = document.querySelectorAll(
            '#devices input[type="checkbox"]',
        );

        // Function to handle the checkbox change event

        // Attach the event listener to each checkbox
        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener("change", (event) =>
                handleCheckboxChange(event, chart),
            );
        });
    }
});

// konten bawah kanan

// ApexCharts options and config
window.addEventListener("load", function () {
    let options = {
        // set the labels option to true to show the labels on the X and Y axis
        xaxis: {
            show: true,
            categories: ["Dec", "Jan", "Feb", "Mar", "Apr", "Mei", "Jun"],
            labels: {
                show: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                    cssClass:
                        "text-xs font-normal fill-gray-500 dark:fill-gray-400",
                },
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
        },
        yaxis: {
            show: true,
            labels: {
                show: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                    cssClass:
                        "text-xs font-normal fill-gray-500 dark:fill-gray-400",
                },
                formatter: function (value) {
                    return value;
                },
            },
        },
        series: [
            {
                name: "Alumni MTS",
                data: [60, 10, 105, 20, 30, 5],
                color: "#3b82f6",
            },
            {
                name: "Bukan alumni",
                data: [5, 40, 30, 30, 87, 40],
                color: "#16BDCA",
            },
        ],
        chart: {
            sparkline: {
                enabled: false,
            },
            height: "80%",
            width: "100%",
            type: "area",
            fontFamily: "Inter, sans-serif",
            dropShadow: {
                enabled: false,
            },
            toolbar: {
                show: false,
            },
        },
        tooltip: {
            enabled: true,
            x: {
                show: false,
            },
        },
        fill: {
            type: "gradient",
            gradient: {
                opacityFrom: 0.55,
                opacityTo: 0,
                shade: "#1C64F2",
                gradientToColors: ["#1C64F2"],
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            width: 6,
        },
        legend: {
            show: false,
        },
        grid: {
            show: false,
        },
    };

    if (
        document.getElementById("labels-chart") &&
        typeof ApexCharts !== "undefined"
    ) {
        const chart = new ApexCharts(
            document.getElementById("labels-chart"),
            options,
        );
        chart.render();
    }
});

// kiri bawah

// ApexCharts options and config
window.addEventListener("load", function () {
    const getChartOptions = () => {
        return {
            series: [70],
            labels: ["Progress"],
            colors: ["#ffffff"],

            chart: {
                height: "250px",
                width: "44%",
                type: "radialBar",
                sparkline: {
                    enabled: true,
                },
            },
            plotOptions: {
                radialBar: {
                    track: {
                        background: "rgba(229, 231, 235, 0.4)",
                    },

                    dataLabels: {
                        show: true,
                        name: {
                            show: false,
                        },
                        value: {
                            color: "#ffffff",
                            fontSize: "30px",
                            fontWeight: "bold",
                            offsetY: 15,
                        },
                    },
                    hollow: {
                        margin: 0,
                        size: "45%",
                    },
                },
            },
            grid: {
                show: false,
                strokeDashArray: 4,
                padding: {
                    left: 2,
                    right: 2,
                    top: -23,
                    bottom: -20,
                },
            },
            tooltip: {
                enabled: true,
                x: {
                    show: false,
                },
            },
            yaxis: {
                show: false,
                labels: {
                    formatter: function (value) {
                        return value + "%";
                    },
                },
            },
        };
    };

    if (
        document.getElementById("radial-chart") &&
        typeof ApexCharts !== "undefined"
    ) {
        var chart = new ApexCharts(
            document.querySelector("#radial-chart"),
            getChartOptions(),
        );
        chart.render();
    }
});
