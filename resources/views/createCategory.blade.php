<form action="" method="post">

    @csrf

    <fieldset class="form-group">

        <label>Name</label>

        <input class="form-control" name="category_name" placeholder="Nhập tên category">

        <label>Description</label>
        <input class="form-control" name="category_description" placeholder="Nhập tên category">

    </fieldset>

    <button type="submit" class="btn btn-success">Submit Button</button>

    <button type="reset" class="btn btn-primary">Reset Button</button>

</form>