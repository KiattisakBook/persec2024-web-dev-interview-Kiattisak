<script>

    function sort_array_string_number(array) { // Ex. sort_array_string_number(["TH10", "TH3Netflix" , "TH1", "TH7"]);
        arr = array;
        arr.sort((a, b) => a.localeCompare(b, 'en', { numeric: true }));
        return arr
    }

</script>