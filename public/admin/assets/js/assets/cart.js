var room = 1;

function education_fields() {

    room++;
    var objTo = document.getElementById('education_fields')
    var divtest = document.createElement("div");
    divtest.setAttribute("class", "form-group removeclass" + room);
    var rdiv = 'removeclass' + room;
    var test = document.getElementById('loop_product')
    var clone = test.cloneNode(true);
    clone.id="test"
    // divtest.innerHTML = '<div class="row"><div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="Schoolname" name="Schoolname[]" value="" placeholder="School name"></div></div><div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="Major" name="Major[]" value="" placeholder="Major"></div></div><div class="col-sm-3 nopadding"><div class="form-group"> <input type="text" class="form-control" id="Degree" name="Degree[]" value="" placeholder="Degree"></div></div><div class="col-sm-3 nopadding"><div class="form-group"><div class="input-group"> <select class="form-control" id="educationDate" name="educationDate[]"><option value="">Date</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option> </select><div class="input-group-append"> <button class="btn btn-danger" type="button" onclick="remove_education_fields(' + room + ');"> <i class="fa fa-minus"></i> </button></div></div></div></div><div class="clear"></div></row>';
    divtest.innerHTML = `<div class="row">
            `
            + clone.innerHTML + 
            `
        <div class="col-sm-2 nopadding">
            <div class="form-group">
                <input type="number" min="1" class="form-control" id="Major" name="value[]" value="" placeholder="số lượng">
            </div>
        </div>
    <div class="input-group-append" style="height: 40px;">
    <button class="btn btn-danger" type="button" onclick="remove_education_fields(${room});"> <i class="fa fa-minus"></i> </button>
    </div>
    </div>`;
    objTo.appendChild(divtest)
}

function remove_education_fields(rid) {
    $('.removeclass' + rid).remove();
}

