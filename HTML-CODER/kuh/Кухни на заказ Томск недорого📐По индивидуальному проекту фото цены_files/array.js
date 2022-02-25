Array.prototype.sort_text = function(direction, index) {
    direction = direction === undefined ? 'asc' : direction;
    direction = direction === 'asc' ? 1 : -1;
    this.sort(function(a, b) {
        if (a[index] < b[index]) return -direction;
        if (a[index] > b[index]) return direction;
        return 0;
    })
};
