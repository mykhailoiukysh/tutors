var data = [
    {
        "No": "1",
        "Subject Title": "English Language",
        "Language Medium": "English",
        "Subject Code": "1128",
    },
    {
        "No": "2",
        "Subject Title": "History",
        "Language Medium": "English",
        "Subject Code": "2174",
    },
    {
        "No": "3",
        "Subject Title": "Geography",
        "Language Medium": "English",
        "Subject Code": "2236",
    }
   ];


$(document).ready(function () {
    $('#datatable_1').DataTable();
});

let object;

function typeFunction(data) {
    object = data;
}

$('.type-menu').click(function(){
    data = object;
    $(document.getElementsByClassName('type-menu')).removeClass('selected')
    $(this).addClass('selected');

    $('#datatable').remove();

    let no = 1;
    let code = '<div id="datatable"><table id="datatable_1" class="table table-striped table-bordered" style="width:100%">\n' +
        '                            <thead>\n' +
        '                            <tr>\n' +
        '                                <th>No</th>\n' +
        '                                <th>Subject Title</th>\n' +
        '                                <th>Type</th>\n' +
        '                                <th>Language Medium</th>\n' +
        '                                <th>Subject Code</th>\n' +
        '                            </tr>\n' +
        '                            </thead>\n' +
        '                            <tbody>';
    for (var i = 0; i < data.length ; i++) {
        if (this.id == 'all' || this.id == data[i]['type']) {
            no++;
            code += '<tr>\n' +
                '                                    <td>' + no + '</td>\n' +
                '                                    <td><a href = "' + data[i]['url'] + '">' + data[i]['subjectTitle'] + '</a></td>\n' +
                '                                    <td>' + data[i]['type'] + '</td>\n' +
                '                                    <td>' + data[i]['languageMedium'] + '</td>\n' +
                '                                    <td>' + data[i]['subjectCode'] + '</td>\n' +
                '                                </tr>'
        }
    }
    code += '</tbody></table></div>';

    $('#insertTable').after(code);

    $('#datatable_1').DataTable();
});
