<footer>
    <a href="#" class="fa fa-facebook"></a>
    <a href="#" class="fa fa-youtube"></a>
    <a href="#" class="fa fa-instagram"></a>
    <p id="made-by">Made by <a href="https://fredrikburmester.com">Fredrik Burmester<a></p>
</footer>
<script>
    //When we start scrolling
    window.onscroll = function() {myFunction()};

    //Get how far the navbar is from the top
    const getOffsetTop = element => {
        let offsetTop = 0;
      while(element) {
        offsetTop += element.offsetTop;
        element = element.offsetParent;
      }
      return offsetTop;
    }

    //Get the element by id and add the "sticky" class to the navbar
    var navbar = document.getElementById("navbar");
    var sticky = getOffsetTop(navbar);
    console.log(sticky);

    function myFunction() {
        if (window.pageYOffset > sticky) {
            navbar.classList.add("sticky")
            // hem.classList.add("hem-padding")
        } else {
            navbar.classList.remove("sticky");
            // hem.classList.add("hem-padding")
        }
    }
</script>
</body>
</html>
