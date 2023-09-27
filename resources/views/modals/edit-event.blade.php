<!-- <form action="" method="post" enctype="multipart/form-data"> 
    <div class="" id="eventModalCreate" tabindex="-1">
        <p>Hey</p>
    </div>

</form> -->
<div class="dialog" id="eventCreateModal">
    <div class="dialog-content">
        <div class="dialog-header">
            <span class="dialog-title">Edit Event</span>
            <span class="close" id="closeDialog">&times;</span>
        </div>
        <div class="dialog-body">
            <form action="{{route('event.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="theme" class="my-1">Theme:</label>
                    <input type="text" class="form-control" name="theme" placeholder="Theme" required>
                </div>
                <div class="form-group">
                    <label for="location" class="my-1">Location:</label>
                    <input type="text" class="form-control" name="location" placeholder="location" required>
                </div>
                <div class="form-group">
                    <label for="description" class="my-1">Description:</label>
                    <input type="text" class="form-control" name="description" placeholder="description" required>
                </div>
                <div class="form-group">
                    <label for="event_date" class="my-1">Event Date:</label>
                    <input type="date" class="form-control" name="event_date" placeholder="Event Date" required>
                </div>
                <div class="form-group">
                    <label for="image" class="my-1">Upload Event Banner:</label>
                    <input type="file" class="form-control" name="image" accept="image/*" required>
                </div>
                <div class="btns-group my-2">
                    <a href="#" class="closeBtn" id="closeBtn">Close</a>
                    <input type="submit" value="Save" class="btn submit-Btn btn-primary ml-auto">
              </div>
            </form>
        </div>
    </div>
</div>