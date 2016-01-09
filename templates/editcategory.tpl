<script type="text/javascript">
    function resetForm(){
        document.getElementById("CustomerAddForm").reset();
    }
</script>
<div class="dialog">
    <div class="interior">
        <div class="dialog-head">
            <a class="close-dialog" href="javascript:void(0)" style="display: none;">Close</a><h3>Edit Category {$category.title}</h3>
        </div>
        <div class="content">
        <form accept-charset="utf-8" method="post" id="ContactAddForm" action="/billing/category.php">
            <input type="hidden" name="id" value="{$category.id}" />
        <fieldset class="show">
            <legend>Category Information</legend>
                <div style="float: left; width: 50%;">
                    <div class="input text required">
                        <label for="ContactFirstName">Title<span>*</span></label>
                        <input type="text" maxlength="255" class="autofocus" name="title" value="{$category.title}">
                    </div>
                    <div class="input text">
                        <label for="ContactLastName">Description</label>
                        <textarea rows="6" cols="30" name="description">{$category.description}</textarea>
                    </div>      
                </div>
        </fieldset>
        <div style="text-align: center;">
            <button class="button" type="submit" name="action" value="update">Update Category</button>                    <span class="cancel">or <a class="close-dialog" href="javascript:void(0)" onclick="resetForm();">Cancel</a></span>
    </div>
        </form></div>
    </div>
</div>