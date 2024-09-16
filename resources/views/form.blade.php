<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss'])
</head>
<body>
<form action="">
        @csrf
        <label for="name">Title:</label>
        <input type="text"id="name"name="title">
        <label for="name">Description:</label>
        <input type="text"id="message"message="message">
        <label for="name">Page Count</label>
        <input type="number"id="message"message="message">
        <label for="page-count"></label>
        <label for="name">Author Name</label>
        <input type="text"id="message"message="message">
        <label for="page-count"></label>
        <label for="name">Author Email</label>
        <input type="text"id="message"message="message">
        <label for="author-email"></label>
        <label for="name">Published Date</label>
        <input type="date"id="message"message="message">
        <label for="published-date"></label>
        <button type="submit">Kirim</button>
        </form>
</body>
</html>