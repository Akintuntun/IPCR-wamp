<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Example</title>
    <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    th, td {
      border: 1px solid black;
      padding: 8px;
      text-align: center;
    }
    .progress-circle {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background-color: #e0e0e0;
      font-size: 18px;
      font-weight: bold;
      color: #333;
      position: relative;
    }
    .progress-circle:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border-radius: 50%;
      background-color: #333;
      transform-origin: center;
      transform: rotate(-90deg);
      z-index: 1;
      clip-path: polygon(50% 0%, 100% 0%, 100% 100%, 50% 100%, 50% 50%);
    }
    .progress-circle span {
      display: block;
      position: relative;
      z-index: 2;
    }
    .progress-circle span:first-child {
      font-size: 24px;
      font-weight: normal;
    }

    .yellow {
        background-color: rgb(255, 255, 204);
    }

    .wheat {
        background-color: rgba(255, 255, 177);
    }

    </style>
</head>
<body>
  <table>
    <tr class="wheat">
      <th></th>
      <th>5</th>
      <th>4</th>
      <th>3</th>
      <th>2</th>
      <th>1</th>
    </tr>
    <tr class="yellow">
      <th>I. Usability</th>
      <td><div class="progress-circle active"><span>50%</span></div></td>
      <td><div class="progress-circle active"><span>50%</span></div></td>
      <td><div class="progress-circle active"><span>50%</span></div></td>
      <td><div class="progress-circle active"><span>50%</span></div></td>
      <td><div class="progress-circle active"><span>50%</span></div></td>
    </tr>
    <tr class="wheat">
      <th>II. Availability</th>
      <td><div class="progress-circle active"><span>50%</span></div></td>
      <td><div class="progress-circle active"><span>50%</span></div></td>
      <td><div class="progress-circle active"><span>50%</span></div></td>
      <td><div class="progress-circle active"><span>50%</span></div></td>
      <td><div class="progress-circle active"><span>50%</span></div></td>
    </tr>
    <tr class="yellow">
      <th>III. Functionality</th>
      <td><div class="progress-circle active"><span>50%</span></div></td>
      <td><div class="progress-circle active"><span>50%</span></div></td>
      <td><div class="progress-circle active"><span>50%</span></div></td>
      <td><div class="progress-circle active"><span>50%</span></div></td>
      <td><div class="progress-circle active"><span>50%</span></div></td>
    </tr>
    <tr class="wheat">
      <th>IV. Reliability</th>
      <td><div class="progress-circle active"><span>50%</span></div></td>
      <td><div class="progress-circle active"><span>50%</span></div></td>
      <td><div class="progress-circle active"><span>50%</span></div></td>
      <td><div class="progress-circle active"><span>50%</span></div></td>
      <td><div class="progress-circle active"><span>50%</span></div></td>
    </tr>
    <tr class="yellow">
      <th>V. Portability</th>
      <td><div class="progress-circle active"><span>50%</span></div></td>
      <td><div class="progress-circle active"><span>50%</span></div></td>
      <td><div class="progress-circle active"><span>50%</span></div></td>
      <td><div class="progress-circle active"><span>50%</span></div></td>
      <td><div class="progress-circle active"><span>50%</span></div></td>
    </tr>
  </table>
</body>
</html>
