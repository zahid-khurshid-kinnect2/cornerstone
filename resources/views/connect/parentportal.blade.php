@include('layouts.header')

<h3> Registration Form </h3>
<img src="http://cornerstone.pk/wp-content/uploads/2016/07/A4-size-Admission-form-fb-01.jpg" alt="medical form" width="900px" height="auto" >
<a href="http://cornerstone.pk/wp-content/uploads/2016/07/A4-size-Admission-form-fb.pdf" download><button type="button" onclick="alert()">Download Form</button></a>



@include('layouts.footer')
<script>
    function alert()
    {
        var x = confirm("Thankyou");
        if (x)
            return true;
        else
            return false;
    }
</script>
