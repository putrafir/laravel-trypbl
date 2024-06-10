// ApexCharts options and config
window.addEventListener("load", function () {
    const donutChartElement = document.getElementById("donut-chart");

    if (donutChartElement) {
        const alumniMTS = parseInt(
            donutChartElement.getAttribute("data-alumni-mts"),
        );
        const nonAlumniMTS = parseInt(
            donutChartElement.getAttribute("data-non-alumni-mts"),
        );

        const getChartOptions = () => {
            return {
                series: [alumniMTS, nonAlumniMTS],
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
                                        const sum =
                                            w.globals.seriesTotals.reduce(
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
        if (typeof ApexCharts !== "undefined") {
            const chartOptions = getChartOptions();
            const chart = new ApexCharts(donutChartElement, chartOptions);
            chart.render();

            // Get all the checkboxes by their class name
            // const checkboxes = document.querySelectorAll(
            //     '#devices input[type="checkbox"]',
            // );

            // Function to handle the checkbox change event
            // const handleCheckboxChange = async (event, chart) => {
            //     try {
            //         const response = await fetch("/api/pendaftar"); // Ganti '/api/pendaftar' dengan endpoint yang sesuai di server Anda
            //         const data = await response.json();

            //         // Proses data untuk mendapatkan jumlah alumni MTS Miftahul Ulum dan non-alumni
            //         const alumniMTS = data.filter(
            //             (pendaftar) =>
            //                 pendaftar.asal_sekolahs.asalSMP ===
            //                 "MTS Miftahul Ulum",
            //         ).length;
            //         const nonAlumniMTS = data.filter(
            //             (pendaftar) =>
            //                 pendaftar.asal_sekolahs.asalSMP !==
            //                 "MTS Miftahul Ulum",
            //         ).length;

            //         // Update series di chart dengan data baru
            //         chart.updateSeries([alumniMTS, nonAlumniMTS]);
            //     } catch (error) {
            //         console.error("Error fetching data:", error);
            //     }
            // };

            // Attach the event listener to each checkbox
            // checkboxes.forEach((checkbox) => {
            //     checkbox.addEventListener("change", (event) =>
            //         handleCheckboxChange(event, chart),
            //     );
            // });
        }
    }
});

// konten bawah kanan

window.addEventListener("load", function () {
    const chartData = window.chartData;

    const categories = chartData.map((data) => data.week);
    const alumniMTSData = chartData.map((data) => data.alumniPerWeek);
    const nonAlumniMTSData = chartData.map((data) => data.nonAlumniPerWeek);

    let options = {
        xaxis: {
            show: true,
            // categories: ["Min 1", "Min 2", "Min 3", "Min 4", "Min 5", "Min 6"],
            categories: categories,
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
                data: alumniMTSData,
                color: "#3b82f6",
            },
            {
                name: "Bukan alumni",
                data: nonAlumniMTSData,
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
