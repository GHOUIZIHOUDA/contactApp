<div id="wrapper">
    <div class="float-right search-container">
        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content ">
                    <div class="modal-header">
                        <h4 class="modal-title">Add person</h4>  
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" id="add_person" method="POST">
                            <label class="control-label col-sm-2 text-white" for="firstname" required>Firstname:</label>
                            <input type="text" class="form-control" id="pwd" placeholder="Enter your first name" name="firstname" >
                            <label class="control-label col-sm-2 text-white" for="lastname" >Lastname:</label>
                            <input type="text" class="form-control" id="pwd" placeholder="Enter your last name" name="lastname" >
                            <label class="control-label col-sm-2 text-white" for="email" >Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" >
                            <label class="control-label col-sm-2 text-white" for="adress" >Adress:</label>
                            <input type="adress" class="form-control" id="pwd" placeholder="Enter your adress" name="adress" >
                            <label class="control-label col-sm-2" for="pwd" >Phone:</label>
                            <input type="text" class="form-control" id="pwd" placeholder="Enter phone" name="phone" >
                            <label class="radio-inline" >
                            <input type="radio" name="group"  value="family">Family
                            </label>
                            <label class="radio-inline" >
                            <input type="radio" name="group" value="friend" >Friend
                            </label>
                            <label class="radio-inline" >
                            <input type="radio" name="group"  value="business">Business
                            </label><br>
                            <label for="comment" class="control-label col-sm-2" >Notes:</label>
                            <textarea class="form-control" rows="" name="note" id="comment" ></textarea>
                            <div class="modal-footer">
                                <input type="submit" value="submit" name="submit" class="btn-dark">
                            </div> 
                        </form>
                    </div>
                </div>                       
            </div>
        </div>
    </div>
</div>

<script src="assets/js/script.js"></script>
