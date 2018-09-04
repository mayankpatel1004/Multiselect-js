<link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-lightness/jquery-ui.css" />
<script type="text/javascript" src="http://10.30.16.148/jpguitar/js/popbox/jquery.js"></script>
<link rel="stylesheet" type="text/css" href="http://localhost/testing/multiselectjs/js/multiselect/jquery.multiselect.css" />
<script type="text/javascript" src="http://localhost/testing/multiselectjs/js/multiselect/jquery-ui.min.js"></script>
<script type="text/javascript" src="http://localhost/testing/multiselectjs/js/multiselect/jquery.multiselect.js"></script>
<script type="text/javascript" src="http://localhost/testing/multiselectjs/js/multiselect/jquery.multiselect.filter.js"></script>
<script type="text/javascript" language="javascript">
    $(document).ready(function () {
        $("#category").multiselect({selectedList: 100}).multiselectfilter({
            filter: function (event, matches) {
                if (!matches.length) {
                    // do something
                }
            }
        });
    });
</script>
<b class="blu">Choose Categories :</b> 
<select multiple="multiple" name="category[]"  id="category">
    <option value="1">Test1</option>
    <option value="2">Test2</option>
    <option value="3">Test3</option>
    <option value="4">Test4</option>
    <option value="5">Test5</option>
</select>




