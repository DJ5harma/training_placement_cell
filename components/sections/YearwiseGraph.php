<div id="YearwiseGraph">
    <h1 class="heading">Our Yearwise Graph</h1>
    <h2>Average Package by year (in LPA)</h2>
    <iframe
        src="https://chart-generator.draxlr.com/embed/uxXvhBaOxVv6qfjT6l2x3EQeDthLcgQg"
        loading="lazy"
        title="Avg package bar chart"
        frameborder="0"
    ></iframe>

    <!-- Incase the iframe fails in the future, uncomment the line below to load the static png of the interactive graph and comment the iframe -->
    <!-- <img src="data/YearwiseAveragePackageGraph.png" alt="Avg. package year-wise graph"> -->
</div>
<style>
    #YearwiseGraph {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;

        iframe {
            width: 100%;
            height: 50%;
        }

        img {
            height: 100%;
            width: auto;
            max-width: 100%;
            object-fit: contain;
            display: block;
            overflow: auto;
        }

    }
</style>