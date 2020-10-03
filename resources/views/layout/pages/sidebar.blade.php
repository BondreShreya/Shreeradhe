
<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
     
    <div class="logo text-center">
      <a href="{{url('/')}}" class="simple-text logo-normal">
       <b>SHREE RADHE CONVENT <br>AND ENGLISH HIGH SCHOOL</b></a>
       <img src="{{ asset('assets/img/Shree_Radhe.png') }}" style="width:50%">
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="{{url('home')}}">
              <i class="text-info material-icons">dashboard</i>
              <p>HOME</p>
            </a>
          </li>
         
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="">
              <i class="material-icons">school</i>
              SCHOOL PROFILE
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('school.create') }}">NEW SCHOOL PROFILE</a>
              <a class="dropdown-item" href="{{ route('school.index') }}">SCHOOL PROFILE LIST</a>
            </div>
          </li>
           <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="">
              <i class="material-icons">wc</i>
              STUDENT PROFILE
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('student.create') }}">NEW ADMISSION</a>
              <a class="dropdown-item" href="{{ route('student.index') }}">ADMISSION lIST</a>
              <a class="dropdown-item" href="">STUDENT MASTER</a>
              <a class="dropdown-item" href="">ALLOTED</a>
              <a class="dropdown-item" href="">NEW ALLOTED</a>
              <a class="dropdown-item" href="">PROMOTE</a>
              <a class="dropdown-item" href="">ATTENDANCE MASTER</a>
              <a class="dropdown-item" href="">NEW ATTENDANCE MASTER</a>
            </div>
          </li>
          <li class="nav-item">
          <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="">
              <i class="material-icons">person</i>
              TEACHER
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('teacher.create') }}">ADD</a>
              <a class="dropdown-item" href="{{ route('teacher.index') }}">TEACHER LIST</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="">
            <i class="material-icons">local_library</i>
             CLASS
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('standard.index') }}">STANDERD</a>
              <a class="dropdown-item" href="{{ route('section.index') }}">SECTION</a>
              <a class="dropdown-item" href="{{ route('class.index') }}">CLASS</a>
            </div>
          </li>
          <li class="nav-item ">
          <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="">
              <i class="material-icons">money</i>
              FEES
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="">ADD FEES</a>
              <a class="dropdown-item" href="">FEES HEAD</a>
              <a class="dropdown-item" href="">PAY FEES</a>
              <a class="dropdown-item" href="">PAID FEES</a>
              <a class="dropdown-item" href="">DAY WISE PAID FEES</a>
              <a class="dropdown-item" href="">FEES SUMMARY</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="">
              <i class="material-icons">dns</i>
              ANNOUNCEMENT
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="">FOR</a>
              <a class="dropdown-item" href="">ANNOUNCEMENT</a>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">event</i>
              <p>TASK MANAGER</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="">
              <i class="material-icons">notifications</i>
              <p>MESSAGE</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="">
              <i class="material-icons">language</i>
              ACCOUNTS
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="">ADD EXPENSES</a>
              <a class="dropdown-item" href="">ALL EXPENSES</a>
              <a class="dropdown-item" href="">LEDGERS</a>
              <a class="dropdown-item" href="">ADD OPINING BLANCE</a>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link  dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="">
              <i class="material-icons">language</i>
              HR
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="">DEPARTMENT</a>
              <a class="dropdown-item" href="">DESIGNATION</a>
              <a class="dropdown-item" href="">ALL EMPLOYEES</a>
              <a class="dropdown-item" href="">NEW EMPLOYEES</a>
              <a class="dropdown-item" href="">HOLIDAY</a>
              <a class="dropdown-item" href="">ATTENDANCE MASTER</a>
              <a class="dropdown-item" href="">NEW ATTENDANCE MASTER</a>
            </div>
          </li>
          <li class="nav-item ">
            <a class="nav-link  dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="">
              <i class="material-icons">language</i>
              PAYROLL
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="">EARNINGS</a>
              <a class="dropdown-item" href="">DEDUCTION</a>
              <a class="dropdown-item" href="">EMPLOYEES LIST</a>
              <a class="dropdown-item" href="">SALARY LIST</a>
            </div>
          </li>
        </ul>
      </div>
     
    </div>
    