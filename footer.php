        <footer>
            <p class="pFooter">©Copyright</p>
            <a class="pIcon mr-2"><i class="fab fa-facebook-f"></i></a>
            <a class="pIcon mr-2"><i class="fab fa-twitter"></i></a>
            <a class="pIcon mr-2"><i class="fab fa-instagram"></i></a>
            <a class="pIcon"><i class="fab fa-google-plus-g"></i></a>
        </footer>
        <?php wp_footer(); ?>

        <script>
            $('#myModal').on('shown.bs.modal', function () {
                $('#myInput').trigger('focus')
            })
        </script>
        
    </body>
</html>
