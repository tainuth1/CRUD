<!-- Modal Bootrap -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-3">
            <div class="modal-header">
                <h4 class="modal-title text-primary " id="staticBackdropLabel">Product Managment</h4>
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <input type="hidden" name="_id" id="id">
                    <label class="" for="">Name</label>
                    <input type="text" name="_name" id="name" required class="form-control" autocomplete="off">
                    <label class=" mt-3" for="">Category</label>
                    <select name="_category" id="category" required class="form-control">
                        <option value=""></option>
                        <option value="laptop">laptop</option>
                        <option value="phone">phone</option>
                        <option value="desktop">desktop</option>
                        <option value="drink">drink</option>
                        <option value="var">var</option>
                        <option value="gaming">gaming</option>
                        <option value="food">food</option>
                        <option value="computer">computer</option>
                        <option value="monitor">monitor</option>
                        <option value="mouse">mouse</option>
                        <option value="keyboard">keyboard</option>
                    </select>
                    <label class=" mt-3" for="">Brand</label>
                    <input type="text" name="_brand" id="brand" required class="form-control" autocomplete="off">
                    <label class=" mt-3" for="">Price</label>
                    <input type="text" name="_price" id="price" required class="form-control" autocomplete="off">
                    <div class="d-flex justify-content-between mt-3">
                        <button class="btn btn-secondary " type="submit" data-bs-dismiss="modal">Cancel</button>
                        <input type="reset" id="reset" value="Reset" class="btn btn-warning ">
                        <input id="add-btn" type="submit" name="_addProduct" value="Add" class="btn btn-primary  ">
                        <button class="btn btn-primary " name="_updated" id="update">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>