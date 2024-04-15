<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Giảng viên</title>
    @include('layout.icon')
    @include('layout.include')
    <link rel="stylesheet" href="/src/css/signContact.css">
    <link rel="stylesheet" href="/src/css/aboutCoachesPage.css">
</head>

<body>
    @include('layout.header')
    <h1 class="PageTitle">CÁC GIẢNG VIÊN TẠI HRC TRAINING CENTER</h1>
    <div class="CoachInfoBlock">
        <div class="row col-md-8 CoachInfoBox">
            <div class="col-md-9 CoachInfo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore beatae hic, accusamus, recusandae impedit delectus suscipit vitae ipsam est, provident eos numquam eaque voluptatum reiciendis reprehenderit eveniet consequuntur eum laudantium!</div>
            <div class="col-md-3 CoachImgBox"><img src="" alt="" class="CoachImg"></div>
        </div>
    </div>
    @include('subcontent.signContactBlock')
    @include('layout.footer')
</body>

</html>
