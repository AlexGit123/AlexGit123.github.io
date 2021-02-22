@extends('layout')

<?php
use App\Models\Grade
?>
@section('content')
<title> Dashboard </title>

<div style="background-color: white;height: 500px">

    <h1 style="text-align:center; font-family: Lato;">Study Guide</h1>

    <h2 style="text-align:center; font-family: Lato;">Useful links</h2>

    <div style="text-align: center;">


        <ol>

            <details style="padding-bottom: 10px;">
                <summary> HZ Course and Examination Regulations</summary>

                <p>https://hz.nl/uploads/documents/Regelingen/EN/OER-HZ-2019-2020werkdocv2018-05-17DEF_ENGELS-AC-29112019.pdf</p>

            </details>


            <details style="padding-bottom: 10px;">
                <summary> Implemantaion Regulations of the HBO-ICT Programme</summary>

                <p>https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf</p>

            </details>


            <details style="padding-bottom: 10px;">
                <summary> Learn Environment</summary>

                <p>https://learn.hz.nl/my/</p>

            </details>


            <details style="padding-bottom: 10px;">
                <summary> Teams Environment</summary>

                <p>To join the Microsoft Teams groups, "HBO-ICT First Year Students" and "HBO-ICT General" use the following codes: w4lad15 & duxq3mb </p>

            </details>


            <details style="padding-bottom: 10px;">
                <summary> MyHz Study Progress</summary>

                <p>https://apps.hz.nl/angular/studievoortgang/studiestatus</p>

            </details>

            <details style="padding-bottom: 10px;">
                <summary> Github Environment</summary>

                <p>https://github.com/</p>

            </details>

        </ol>


    </div>

</div>




<div style="background-color: whitesmoke;height: 1500px;">

    <table style="

        width: 100%;
        border: 1px solid black;
        text-align: center;
        padding-top: 10px; ">


        <caption style="padding-bottom: 10px; font-size: 30px ; font-family: Lato; font-weight: 300;">

            Study Overview for First Year of the ICT Program </caption>


        <tr style="background-color:lightskyblue; padding-bottom: 10px;">

            <div contenteditable="true" style="padding-bottom: 0px;">


                <th>Quartile</th>

                <th>Course</th>

                <th>EC</th>

                <th>Exam</th>

                <th>Grade</th>

        </tr>

</div>


<tr>
    <div contenteditable="true" style="border-block: orange;">

        <td rowspan="3">1</td>

        <td></td>

        <td>2.5</td>

        <td>Assessment</td>

        <td>N/A</td>

</tr>


<tr>
    <td>Computer Science Basics</td>

    <td>7.5</td>

    <td>Written</td>

    <td>N/A</td>

</tr>


<tr>

    <td>Programming Basics</td>

    <td>5</td>

    <td>Case Study</td>

    <td>N/A</td>


</tr>


<tr>

    <td rowspan="5">2</td>

    <td rowspan="2">Object Orientated Programming</td>

    <td rowspan="2">10</td>

    <td>Case Study</td>

    <td>N/A</td>

</tr>


<tr>

    <td>Project</td>

    <td>N/A</td>

</tr>


<tr>
    <td>Professional Skills 1</td>

    <td>2.5</td>

    <td>Portfolio</td>

    <td>N/A</td>

</tr>


<tr>
    <td>HZ Personality</td>

    <td>2.5</td>

    <td>Portfolio</td>

    <td>N/A</td>

</tr>

<tr>

    <td>IT Personality</td>

    <td>2.5</td>

    <td>Portfolio</td>

    <td>N/A</td>

</tr>

<tr>
    <td rowspan="5">3</td>

    <td>Framework Project 1</td>

    <td>5</td>

    <td>Portfolio x2</td>

    <td>N/A</td>

</tr>


<tr>

    <td>Framework Development 1</td>

    <td>5</td>

    <td>Case Study</td>

    <td>N/A</td>

</tr>


<tr>

    <td>Professional Working Environment 1</td>

    <td>2.5</td>

    <td>Assessment</td>

    <td>N/A</td>

</tr>


<tr>

    <td rowspan="2">Professional Skills 2</td>

    <td rowspan="2">2.5</td>

    <td>Portfolio</td>

    <td>N/A</td>

</tr>


<tr>

    <td >Written x2</td>
    <td>N/A</td>

</tr>


<tr>
    <td rowspan="5">4</td>

    <td>Framework Project 2</td>

    <td>5</td>

    <td>Portfolio</td>

    <td>N/A</td>

</tr>


<tr>
    <td>Framework Project 2</td>

    <td>5</td>

    <td>Portfolio</td>

    <td>N/A</td>

</tr>


<tr>
    <td rowspan="2">Professional Skills 3</td>

    <td rowspan="2">2.5</td>

    <td>Portfolio</td>

    <td>N/A</td>

</tr>


<tr>
    <td rowspan="2">Written Exams</td>

    <td>N/A</td>

</tr>


<div>

    <h1 style="text-align:center; font-family: Lato;"> Study Monitor  </h1>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Month', 'Study Points', 'Required', 'Goal'],
                ['1',  0,      45, 60],
                ['2',  0,      45, 60],
                ['3',  0,      45, 60],
                ['4',  0,      45, 60],
                ['5',  0,      45, 60],
                ['6',  0,      45, 60],
                ['7',  0,      45, 60],
                ['8',  0,      45, 60],
                ['9',  0,      45, 60],
                ['10',  0,      45, 60],
                ['11',  0,      45, 60],
                ['12',  0,      45, 60],
            ]);

            var options = {
                title: 'Study Points',
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>

</div>


<div id="curve_chart"></div>


</table>

</div>
@endsection
