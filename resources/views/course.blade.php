<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Các khóa học</title>
    @include('layout.icon')
    @include('layout.include')
    <link rel="stylesheet" href="/src/css/course.css">
    <link rel="stylesheet" href="/src/css/newCourse.css">
</head>

<body>
    @include('layout.header')
    @include('subcontent.courseBlock')
    @include('subcontent.newCourseBlock')
    @include('layout.footer')
</body>

</html>
