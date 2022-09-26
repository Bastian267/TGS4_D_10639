<?php 
    include '../component/sidebar.php'
?>

    <div class="container p-3 m-4 h-100" style="background-color: #FFFFFF;  border-top: 5px solid #D40013; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
        <h4>Add Series</h4>
        <hr>
        <form action="../process/addSeriesProcess.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input class ="form-control" id="name" name = "name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Genre</label>
                <select class ="form-select" id="genre" name = "genre[]" multiple aria-label="multiple select example">
                <option value="Action">Action</option>
                <option value="Comedy">Comedy</option>
                <option value="Romance">Romance</option>
                <option value="Scifi">Scifi</option>
                <option value="Thriller">Thriller</option>
                <option value="Horror">Horror</option>
                <option value="Drama">Drama</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Realease</label>
                <input class ="form-control" id="realease" name = "realease" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Episode</label>
                <input class ="form-control" id="episode" name = "episode" aria-describedby="emailHelp">
            </div>
            
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Season</label>
                <input class ="form-control" id="season" name = "season" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Synopsis</label>
                <input class ="form-control" id="synopsis" name = "synopsis" aria-describedby="emailHelp">
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary" name="addSeries">Save</button>
            </div>
        </form>
    </div>

</aside>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-
MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>
</html>