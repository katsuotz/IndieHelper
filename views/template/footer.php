	  <footer class="page-footer purple darken-2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">Indie helper </p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Follow Us</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Our Contac</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">About Us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2016 Indie Helper
            <a class="grey-text text-lighten-4 right" href="#!">www.smkn4bandung.sch.com</a>
            </div>
          </div>
        </footer>
<?php foreach ($assets['js'] as $key => $value): ?>
	<script type="text/javascript" src="<?= baseurl('assets/js/'. $value) ?>"></script>
<?php endforeach; ?>
</body>
</html>