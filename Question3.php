<script>

    function reverseEncoder(string) {
        var code = { "a": "z", "A": "Z", "b": "y", "B": "Y", "c": "x", "C": "X", "d": "w", "D": "W", "e": "v", "E": "V", "f": "u", "F": "U", "g": "t", "G": "T", "h": "s", "H": "S", "i": "r", "I": "R", "j": "q", "J": "Q", "k": "p", "K": "P", "l": "o", "L": "O", "m": "n", "M": "N", "n": "m", "N": "M", "o": "l", "O": "L", "p": "k", "P": "K", "q": "j", "Q": "J", "r": "i", "R": "I", "s": "h", "S": "H", "t": "g", "T": "G", "u": "f", "U": "F", "v": "e", "V": "E", "w": "d", "W": "D", "x": "c", "X": "C", "y": "b", "Y": "B", "z": "a", "Z": "A" };
        return Array.from(string, c => code[c] || c).join('').split(' ').reverse().join(' ');
    }

    function reverseDecoder(string) {
        var code = { "z": "a", "Z": "A", "y": "b", "Y": "B", "x": "c", "X": "C", "w": "d", "W": "D", "v": "e", "V": "E", "u": "f", "U": "F", "t": "g", "T": "G", "s": "h", "S": "H", "r": "i", "R": "I", "q": "j", "Q": "J", "p": "k", "P": "K", "o": "l", "O": "L", "n": "m", "N": "M", "m": "n", "M": "N", "l": "o", "L": "O", "k": "p", "K": "P", "j": "q", "J": "Q", "i": "r", "I": "R", "h": "s", "H": "S", "g": "t", "G": "T", "f": "u", "F": "U", "e": "v", "E": "V", "d": "w", "D": "W", "c": "x", "C": "X", "b": "y", "B": "Y", "a": "z", "A": "Z" };
        return Array.from(string, c => code[c] || c).join('').split(' ').reverse().join(' ');
    }

</script>