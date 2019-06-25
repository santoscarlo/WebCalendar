var fname, lname, gender, position, province;
    function _(x){
      return document.getElementById(x);
    }
    function processPhase1(){
      fname = _("firstname").value;
      lname = _("lastname").value;
      position = _("position").value;
      gender = _("gender").value;
      if (fname.length > 2 && lname.length > 2 && position.length > 2 && gender.length > 2) {
        _("phase1").style.display = "none";
        _("phase2").style.display = "block";
        _("progressBar").value = 11.11;
        _("status").innerHTML = "I. Physical and Demographic Characteristics 2 of 9";
      } else {
          alert("Please fill in the fields");
      }
    }
    function processPhase2(){
      province = _("province").value;
      if (province.length > 2) {
        _("phase2").style.display = "none";
        _("show_all_data").style.display = "block";
        _("display_fname").innerHTML = fname;
        _("display_lname").innerHTML = lname;
        _("display_position").innerHTML = position;
        _("display_gender").innerHTML = gender;
        _("display_province").innerHTML = province;
        _("progressBar").value = 33.33;
        _("status").innerHTML = "Data Overview";
      } else {
          alert("Please fill in the fields");
      }
    }
    function submitForm(){
      _("multiphase").method = "post";
      _("multiphase").action = "my_parser.php";
      _("multiphase").submit();
    }