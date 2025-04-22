<div style="display: flex; flex-direction: column; width: 100%; height:100%; align-items: center;">
    <h1>Our Team</h1>
    <div id="Team">
        <div>
            <img src="images/drnikhil.jpg" alt="Dr. Nikhil Marriwala">
            <div>
                <p>Dr. Nikhil Marriwala</p>
                <p>Training & Placement Officer</p>
                <p>Contact No. 9416668482</p>
            </div>
        </div>
        <div>
            <img src="images/drsanjeev.jpg" alt="Dr. Sanjeev Ahuja">
            <div>
                <p>Dr. Sanjeev Ahuja</p>
                <p>Training & Placement Officer</p>
                <p>No. 9991385634</p>
            </div>
        </div>
        <div>
            <img src="images/DrSunilDhingra.jpeg" alt="Dr. Sunil Dhingra">
            <div>
                <p>Dr. Sunil Dhingra</p>
                <p>Training & Placement Officer</p>
                <p>Contact No. 9541653750</p>
            </div>
        </div>
    </div>
</div>

<style>
    h1{
        background-color: rgb(31, 65, 185);
        color: aliceblue;
        width: 100%; 
        padding: 10px;
        text-align: center;
        font-size: 50px;
    }
    #Team {
        display: flex;
        width: 100%;
        flex-direction: column;
        height: 100%;
        /* flex-wrap: wrap; */
        overflow: auto;

        align-items: center;
        justify-content: start;

        gap: 20px;
        padding: 10px 0;

        div {
            display: flex;
            gap: 30px;

            img {
                width: 300px;
            }

            div {
                display: flex;
                flex-direction: column;
                gap: 10px;
                justify-content: center;

                p {
                    font-size: larger;
                }
            }
        }
    }
</style>