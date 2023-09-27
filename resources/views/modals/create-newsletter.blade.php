<div class="dialog" id="eventCreateModal">
    <div class="dialog-content">
        <div class="dialog-header">
            <span class="dialog-title">Add Newsletter</span>
            <span class="close" id="closeDialog">&times;</span>
        </div>
        <div class="dialog-body">
            <form action="{{route('newsletter.store')}}" method="post" role="form" enctype="multipart/form-data">
                @csrf
                <div class="form-group my-1">
                    <label for="title" class="my-1">Title:</label>
                    <input type="text" class="form-control" name="title" placeholder="title" required>
                </div>
                <div class="form-group my-1">
                    <label for="issued_by" class="my-1">Issued By:</label>
                    <input type="text" class="form-control" name="issued_by" placeholder="Author Name" required>
                </div>
                <div class="form-group my-1">
                    <label for="issued_on" class="my-1">Issued On:</label>
                    <input type="date" class="form-control" name="issued_on" placeholder="Date issued" required>
                </div>
                <div class="form-group my-1">
                    <label for="document" class="my-1">Upload Newsletter:</label>
                    <input type="file" class="form-control" name="document" accept="application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document" required>
                </div>
                <div class="btns-group my-2">
                    <a href="#" class="closeBtn" id="closeBtn">Close</a>
                    <input type="submit" value="Save" class="btn submit-Btn btn-primary ml-auto">
              </div>
            </form>
        </div>
    </div>
</div>