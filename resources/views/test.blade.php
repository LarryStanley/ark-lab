<form method="POST" action="/api/upload_image"  enctype="multipart/form-data">
    {!! csrf_field() !!}

    <input type="text" name="title">
    <input type="file" name="photo">
    <div>
        <button type="submit">送出</button>
    </div>
</form>