lpg.utils.elements = {};

lpg.utils.elements.parse_option = function(row) {
    return '<option value="' + row[0] + '">' + row[1] + '</option>';
};

lpg.utils.elements.parse_options = function(data) {
    var options = [];
    data.forEach(function(row) {
        options.push(lpg.utils.elements.parse_option(row));
    });
    return options;
};
