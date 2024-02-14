<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RGB SORTER</title>
    <!-- <link rel="stylesheet" href="RGBsorter.css"> -->
    
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }

        .RGB_sorters_content{
            display: flex;
            flex-wrap: wrap;
            margin-top: 50px;
            margin-bottom: 5px;
            
        }

        .RGB_details{
            background: #f8f8f8;
            padding: 50px;
            padding-left: 150px;
            width: 50%;
        }

        .Advanced_Technology{
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            font-family:  'Arial Narrow', Arial, sans-serif;
            letter-spacing: 1px;
            line-height: 20px;
        }

        .Advanced_Technology>div>h4{
            padding-top: 10px;
            padding-bottom: 10px;
            width: 150px;
            font-family: Roboto, sans-serif;
            
        }

        .RGB_sorters_img>img{
            height: 700px;
            width: 700px;
            margin-left: 100px;
        }

        .RGB_headings{
            padding-top: 20px;
            padding-bottom: 20px;
            font-family:  'Arial Narrow', Arial, sans-serif;
            font-weight: 900;
        }

        .RGB_headings:hover{
            color: #6eb3f3;
        }

        .Description_content{
            line-height: 30px;
            font-size: 20px;
            margin-left: 20px;
            padding-left: 3%;
            width: 700px;
            font-family:  'Arial Narrow', Arial, sans-serif;
        }

        /* Table */
        .Specification_table{
            background: #f8f8f8;
            justify-items: center;  
            margin-top: 50px;
            padding-bottom: 100px;
            font-family:  'Arial Narrow', Arial, sans-serif;
            
        }

        .Specification_table>h2{
            padding-top: 30px;
            padding-bottom: 30px;
            margin-left: 70px;
            font-weight: 900;
        }

        .Specification_table>h2:hover{
            color: #6eb3f3;
        }

        table{
            width: 80%;
            text-align: center; 
            margin-left: 70px;
            border-collapse: collapse;
        }

        th,td{
            padding: 13px 20px;
            border: 2px solid  #e0dfdf;
        }

        th{
            background-color: #f8f8f8;
        }

        tr:nth-child(odd){
            background-color: #e6e4e4;
        }

        .Specification_table>p{
            color: red;
            margin-top: 10px;
            margin-left: 70px;
        }

        .controlsDesc{
            display: none;
        }

        .controlsDesc.active{
            display: block;
        }

        .controlsDesc2{
            display: none;
        }

        .controlsDesc2.active2{
            display: block;
        }

        .controlsDesc3{
            display: none;
        }

        .controlsDesc3.active3{
            display: block;
        }

        .controlsDesc4{
            display: none;
        }

        .controlsDesc4.active4{
            display: block;
        }

        @media screen and (max-width:786px) {
            .RGB_details{
                flex-direction: column;
                width: 100%;
                justify-items: center;
                padding: 0px;
            
            }

            .Description_content{
                width: 90%;
                padding-left: 3%;
            }

            .Advanced_Technology{
                width: 100%;
                padding-left: 10px;
                }

            .RGB_sorters_content{
                background: #f8f8f8;
                width: 100%;
            }

            .RGB_sorters_img{
                width: 100%;
                height: auto;
                margin: 0px auto;
                text-align: center;
            
            }
            .RGB_sorters_img img{
                width: 70%;
                height: auto;
                margin-left: 0%;
            }
            
        
            .Specification_table{
                max-width: 100%;
                overflow-x: scroll;
            }  

            .Specification_table>p{
                margin-top: 0%;
                margin-left: 0%;
            }

            .RGB_headings{
                padding-left: 3%;
            }
        
        }
    </style>
</head>
<body>
      
            <div class="RGB_sorters_content">
                <div class="RGB_details">
                    <div>
                        <h2 class="RGB_headings">Description</h2>
                        <ul class="Description_content">
                            <li>Simultaneously Sorting MULTI color defects of grain with online <b>Rejection Separation</b>.</li>
                            <li>Able to Sort Multi grains with high Prrecessiom.</li>
                            <li>RGB sorter is available with <b>64-128-192-256-320-384-448</b> Channels.</li>
                            <li>Pixel by pixel which ensures highly precise, accurate & consistent performance throughout the life of machine.</li>
                        </ul>
                    </div>
                    <h2 class="RGB_headings">Advanced Technology with</h2>
                    <div class="Advanced_Technology">
                        <div>
                            <h4>Controller</h4>
                            <div class="selects">
                                <img  src="RGBdorter pics/controller.jpg" alt="Controller photo">
                            </div>
                            <div class="controlsDesc">
                                <ul>
                                    <li>Most advanced user friendly Multi tasking controller with 12 inch display and linux operating system to ensure fastest and stable operation.</li>
                                    <li>Pixel by pixel real time auto calibration capability for precise and accurate sorting.</li>
                                    <li>Individual configuration for primary, secondary and tertiary grain runs.</li>
                                    <li>Self Diagnosis and alarm monitoring capability for easy maintanance.</li>
                                  </ul>
                            </div>
                        </div>
                        <div>
                            <h4>Teledyne Dalsa Camera</h4>
                            <div class="selects2">
                                <img src="./Images/Gallery/camera_1.jpg" alt="Teledyne Dalsa Camera photo">
                            </div>
                            <div class="controlsDesc2">
                                <ul>
                                    <li>BOA is a highly integrated optical inspection tool for controlling quality and increasing productivity.</li>
                                    <li>It comprises all the elements of an industrial machine vision system in a tiny smart camera style package..</li>
                                   
                                </ul>
                            </div>
                        </div>
                        <div>
                            <h4>Ejectors</h4>
                            <div class="selects3">
                                <img src="RGBdorter pics/enject.jpg" alt="Ejectors photo">
                            </div>
                            <div class="controlsDesc3">
                                <ul>
                                    <li>Japan Made very high speed, extremely precise shooting, Long life and Less Air consumption ejectors.</li>
                                    <li>Quick response time with shooting speed of 1200-3000 times per second.</li>
                                    <li>Serviceable ejectors with extra long life (more than 6 billion shots).</li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <h4>LED</h4>
                            <div class="selects4">
                                <img src="RGBdorter pics/led.jpg" alt="LED photo">
                            </div>
                            <div class="controlsDesc4">
                                <ul>
                                    <li>CREE's are super high-performing, energy-efficient LEDs which provide a crisp, but low-glare output.</li>
                                    <li>CREE-USA make Broad band, Long Life, Highly Bright LED Lamps provides clear vision to Cameras.</li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="RGB_sorters_img">
                    <img src="RGBdorter pics/machine1.jpeg" alt="">
                </div>
            </div>
            
            <!-- Table -->
            <div class="Specification_table" >

                
                <h2>Specification</h2>
                <table>
                    <THead>
                        <tr>
                            <th><b>MODEL</b></th>
                            <th><b>CHANNELS</b></th>
                            <th><b>INPUT CAPACITY (ton/hr)</b></th>
                            <th><b>POWER (kw)</b></th>
                            <th><b>COMPRESSOR (hp)</b></th>
                            <th><b>SIZE mm (LxWxH)</b></th>
                        </tr>
                    </THead>
                    <tbody>
                        <tr>
                            <td>RGB-S7</td>
                            <td>448</td>
                            <td>7-21</td>
                            <td>5</td>
                            <td>35</td>
                            <td>2900x1415x1700</td>
                        </tr>

                        <tr>
                            <td>RGB-S6</td>
                            <td>384</td>
                            <td>6-18</td>
                            <td>4.5</td>
                            <td>30</td>
                            <td>2592x1415x1702</td>
                        </tr>

                        <tr>
                            <td>RGB-S5</td>
                            <td>320</td>
                            <td>5-15</td>
                            <td>4</td>
                            <td>25</td>
                            <td>2285x1415x1702</td>
                        </tr>

                        <tr>
                            <td>RGB-S4</td>
                            <td>256</td>
                            <td>4-12</td>
                            <td>3.2</td>
                            <td>20</td>
                            <td>1944x1415x1702</td>
                        </tr>

                        <tr>
                            <td>RGB-S3</td>
                            <td>192</td>
                            <td>3-9</td>
                            <td>2.5</td>
                            <td>15</td>
                            <td>1637x1415x1702</td>
                        </tr>

                        
                        <tr>
                            <td>RGB-S2</td>
                            <td>128</td>
                            <td>1-5</td>
                            <td>2</td>
                            <td>10</td>
                            <td>1330x1415x1702</td>
                        </tr>

                        
                        <tr>
                            <td>RGB-S1</td>
                            <td>64</td>
                            <td>0.5-1</td>
                            <td>1</td>
                            <td>5</td>
                            <td>700x1415x1702</td>
                        </tr>
                    </tbody>
                </table>

                <p>Input Capacity depends upon various matters i.e. Type of material, Type of contamination & contamination ratio etc. Any or all specifications are subject to change without prior notice.</p>
            </div>
        
<!--    <script src="app.js"></script> -->

        <script>

                let pic1 = document.querySelector('.selects');
                let event1 = document.querySelector('.controlsDesc');
                pic1.addEventListener('click', ()=> {
                    event1.classList.toggle('active');
                    pic1.classList.toggle('toggle');
                })

                let pic2 = document.querySelector('.selects2');
                let event2 = document.querySelector('.controlsDesc2');
                pic2.addEventListener('click', ()=> {
                    event2.classList.toggle('active2');
                    pic2.classList.toggle('toggle');
                })

                let pic3 = document.querySelector('.selects3');
                let event3 = document.querySelector('.controlsDesc3');
                pic3.addEventListener('click', ()=> {
                    event3.classList.toggle('active3');
                    pic3.classList.toggle('toggle');
                })

                let pic4 = document.querySelector('.selects4');
                let event4 = document.querySelector('.controlsDesc4');
                pic4.addEventListener('click', ()=> {
                    event4.classList.toggle('active4');
                    pic4.classList.toggle('toggle');
                })

        </script>
</body>
</html>