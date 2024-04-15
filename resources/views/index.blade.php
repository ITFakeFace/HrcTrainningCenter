<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang chủ</title>
    @include('layout.icon')
    @include('layout.include')
    <link rel="stylesheet" href="/src/css/homepage.css">
    <link rel="stylesheet" href="/src/css/course.css">
    <link rel="stylesheet" href="/src/css/newCourse.css">
</head>

<body>
    @include('layout.header')

    <div style="width:100%; height: 720px; background-color: grey;">

    </div>
    <div class="inspirationBlock">
        <div class="title">
            <div>Đồng hành phát triển cùng nguồn nhân lực trẻ <br> - Partner of young growth</div>
        </div>
        <div class="description">
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo perspiciatis eius unde nam consequatur amet accusamus, ratione repellat iure tenetur saepe illum ipsum sit animi quo ullam sed corrupti rerum!</div>
        </div>

        <div class="row contentBoxBlock">
            <div class="col-3 contentBox">
                <div class="title">#TruyenCamHung</div>
                <div class="content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus excepturi reprehenderit magni expedita, recusandae labore iste sapiente error eos, beatae autem eaque! Commodi sunt sequi ipsa nam laborum, ad rerum.</div>
            </div>
            <div class="col-3 contentBox">
                <div class="title">#TuDuyChienLuoc</div>
                <div class="content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus excepturi reprehenderit magni expedita, recusandae labore iste sapiente error eos, beatae autem eaque! Commodi sunt sequi ipsa nam laborum, ad rerum.</div>
            </div>
            <div class="col-3 contentBox">
                <div class="title">#CongDong</div>
                <div class="content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus excepturi reprehenderit magni expedita, recusandae labore iste sapiente error eos, beatae autem eaque! Commodi sunt sequi ipsa nam laborum, ad rerum.</div>
            </div>
        </div>
    </div>
    @include('subcontent.courseBlock')
    @include('subcontent.newCourseBlock')
    @include('layout.footer')
</body>

</html>
