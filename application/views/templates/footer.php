</div><!-- end main-content -->
<script>
// Auto-hide alerts
setTimeout(() => {
  document.querySelectorAll('.alert').forEach(el => {
    el.style.transition = 'opacity .5s';
    el.style.opacity = '0';
    setTimeout(() => el.remove(), 500);
  });
}, 3000);
</script>
</body>
</html>
