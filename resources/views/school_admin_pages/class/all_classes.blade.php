<?php $institute_type=Session::get('institute_type')?>

@if($institute_type==1)

    <select class="form-control" name="std_class">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>

    @elseif ($institute_type==2)
    <select class="form-control" name="std_class">
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
    </select>

@endif
