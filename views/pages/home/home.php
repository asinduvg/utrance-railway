  <section class="heading-primary">
    <?php 
      include_once "../views/components/searchbarMain.php";
        echo renderSearchBar(null, null, null);
    ?>
  </section>

  <?php include_once 'newsfeed.php';?>

  <script type="text/javascript" src="/public/js/components/mainSearch.js"></script>
  <script type="text/javascript" src="/public/js/components/currentDate.js"></script>
  <script>
    document.querySelector(".js--from__station").textContent = stationsArray[3];
    document.querySelector(".js--to__station").textContent = stationsArray[0];
    document.querySelector(".js--search-dropdown__search-from").value = stationsArray[3];
    document.querySelector(".js--search-dropdown__search-to").value = stationsArray[0];
  </script>
  </body>
</html>
