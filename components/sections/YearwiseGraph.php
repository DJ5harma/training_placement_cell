<div id="YearwiseGraph">
    <h1 class="heading">Our Yearwise Graph</h1>
    <h2>Average Package by year (in LPA)</h2>
    <iframe
        src="https://chart-generator.draxlr.com/embed/uxXvhBaOxVv6qfjT6l2x3EQeDthLcgQg"
        loading="lazy"
        title="Avg package bar chart"
        frameborder="0"></iframe>
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
            height: 100%;
        }
    }

    @media (max-width: 768px) {
        #YearwiseGraph iframe {
            height: 60%;
        }
    }
</style>