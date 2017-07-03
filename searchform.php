<form role="search" method="get" id="searchform" action="<?php echo home_url('/'); ?>">
    <div class="w-row collapse">
        <div class="w-col-10 w-col">
            <input type="text" value="" name="s" id="s" placeholder="<?php esc_attr_e('Search', 'grizzlybear'); ?>">

            <input type="hidden" name="post_type" value="post" /> 
            <div class="w-col-2 w-col">
                <button type="submit">Submit</button>
            </div>
        </div>
    </div>
</form>