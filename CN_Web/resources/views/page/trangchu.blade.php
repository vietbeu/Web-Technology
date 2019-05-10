@extends('master')
@section('content')
<style>
#more {display: none;}
</style>
<div class="hero-wrap js-fullheight" style="background-image: url('source/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
          	<p class="mb-4 mt-5 pt-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Có <span class="number" data-number="{{count($sumofjobs)}}">0</span> công việc hấp dẫn đang chờ bạn!</p>
            <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Your Dream <br><span>Job is Waiting</span></h1>

						<div class="ftco-search">
							<div class="row">
		            <div class="col-md-12 nav-link-wrap">
			            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			              <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="" role="tab" aria-controls="v-pills-1" aria-selected="false">Tìm kiếm công việc</a>

			            </div>
			          </div>
			          <div class="col-md-12 tab-wrap">
			            
			            <div class="tab-content p-4" id="v-pills-tabContent">

			              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
			              	<form method="get" action="{{route('searchjob')}}" class="search-job">
			              		<div class="row">
			              			<div class="col-md">
			              				<div class="form-group">
				              				<div class="form-field">
				              					<div class="icon"><span class="icon-briefcase"></span></div>
								                <input type="text" class="form-control" name="jobname" placeholder="eg. Thiết kế đồ họa">
								              </div>
							              </div>
			              			</div>
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
				              					<div class="select-wrap">
						                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
						                      <select name="catname" id="" class="form-control">
                                    <option value="novalue">Loại công việc</option>
                                    @foreach($category as $cate)
						                      	<option value="{{$cate->Id}}">{{$cate->Name}}</option>
						                      @endforeach
						                      </select>
						                    </div>
								              </div>
							              </div>
			              			</div>
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
				              					<div class="icon"><span class="icon-map-marker"></span></div>
								                <select name="searchlocation" id="" class="form-control">
                                  <option value="novalue">Địa điểm</option>
                                    @foreach($location as $loca)
                                    <option value="{{$loca->name}}">{{$loca->name}}</option>
                                  @endforeach
                                </select>
								              </div>
							              </div>
			              			</div>
			              			<div class="col-md">
			              				<div class="form-group">
			              					<div class="form-field">
								                <input type="submit" value="Tìm kiếm" class="form-control btn btn-primary">
								              </div>
							              </div>
			              			</div>
			              		</div>
			              	</form>
			              </div>

			            </div>
			          </div>
			        </div>
		        </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-resume"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Tìm kiếm hàng ngàn công việc</h3>
                <p>Tìm kiếm việc làm dễ dàng, phù hợp khả năng bản thân.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-collaboration"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Dễ dàng quản lý đơn xin việc</h3>
                <p>Quản lý hồ sơ thuận tiện, liên tục cập nhật công việc mới.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-promotions"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Các công việc hot</h3>
                <p>Các công việc với mức lương mơ ước, môi trường năng động.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <div class="icon"><span class="flaticon-employee"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Tìm kiếm ứng viên tài năng</h3>
                <p>Hàng ngàn hồ sơ xin việc cho nhà tuyển dụng.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-counter">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Tìm kiếm công việc theo ngành</span>
            <h2 class="mb-4"><span>Tìm việc </span>theo nhóm ngành</h2>
          </div>
        </div>
     <div class="row"> 
        <div class="row">
          @for($j=0;$j<=2;$j++)
          <div class="col-md-3 ftco-animate">
            <ul class="category">
              @for($i=0;$i<$var;$i++)
              <li><a href="{{route('loaiviec',$types[$var*$j+$i]->Id)}}">{{$types[$var*$j+$i]->Name}}</a></li>
              @endfor
            </ul>
        </div>
        @endfor
        <div class="col-md-3 ftco-animate">
            <ul class="category">
              @for($i=3*$var;$i<=count($types)-1;$i++)
              <li><a href="{{route('loaiviec',$types[$i]->Id)}}">{{$types[$i]->Name}}</a></li>
            @endfor
            </ul>
        </div>
      </div>

        </div>
     </div>
    </section>

		<section class="ftco-section bg-light">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Thông tin tuyển dụng</span>
            <h2 class="mb-4"><span>Các công việc</span> gần đây</h2>
          </div>
        </div>
				<div class="row">
					@foreach($alljobs as $job)
          <div class="col-md-12 ftco-animate">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3">{{$job->title}}</h2>
                  <div class="badge-wrap">
                   <span class="bg-primary text-white badge py-2 px-3">${{$job->salary}}</span>
                  </div>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3"><span class="icon-layers"></span>Deadline: {{$job->deadline}}</div>
                  <div><span class="icon-my_location"></span> <span>Số lượng: {{$job->views}}</span></div>
                </div>

                <button class="collapsible" style="background-color: #78d5ef; background-image: linear-gradient(to bottom, #2A95C5, #21759B);box-shadow: 0 1px 0 rgba(120, 200, 230, 0.5) inset;border-color: #21759B #21759B #1E6A8D #21759B; border-style: solid; border-width: 1px; border-radius: 3px 3px 3px 3px; display: inline-block; padding: 2px 5px 3px 5px; margin: 1px 3px; color: #FFFFFF; text-shadow: 0 1px 0 rgba(0, 0, 0, 0.1); text-decoration: none; cursor: pointer; white-space: nowrap;">Ẩn/Hiện thông tin</button>
              <div class="content" style="display: none; overflow: hidden;">
                <p>{!! $job->description !!}</p>
              </div>
            </div>

              <div class="ml-auto d-flex">
                @if(Session::has('user'))
                <a href="{{route('chitietviec',$job->Id)}}" class="btn btn-primary py-2 mr-1">Liên hệ</a>

                @endif
<!--                 <a href="#" class="btn btn-secondary rounded-circle btn-favorite d-flex align-items-center icon">
                	<span class="icon-heart"></span>
                </a> -->
              </div>
            </div>
          </div><!-- end -->
          @endforeach
				</div>
				<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              {{$alljobs->links()}}
            </div>
          </div>
        </div>
			</div>
		</section>

		 <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(source/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="{{count($sumofjobs)}}">0</strong>
		                <span>Công việc</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="{{count($alluser)}}">0</strong>
		                <span>Người dùng</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="64">0</strong>
		                <span>Thành phố</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="{{count($allapply)}}">0</strong>
		                <span>Company</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Dịch vụ hướng tới</span>
            <h2 class="mb-4"><span>Khách hàng</span> Hạnh phúc</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(source/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Với công nghệ tiên tiến và mạng lưới toàn cầu, ... giúp kết nối nhiều nhà tuyển dụng với các ứng viên tiềm năng và chất lượng, hỗ trợ nhiều doanh nghiệp tìm được nguồn nhân lực ưu tú và người tìm việc tìm thấy công việc phù hợp.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Giám đốc Marketing</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(source/images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Số lượng công việc và số lượng hồ sơ rất lớn. Thêm vào đó thì chất lượng công việc cũng như chất lượng hồ sơ ứng viên rất ổn. Nếu bạn là người đã có kinh nghiệm thì không nên bỏ qua trang web này.</p>
                    <p class="name">Tuấn Nguyễn</p>
                    <span class="position">Trưởng phòng Nhân sự</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(source/images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">Trang web này cũng thường đăng tin của các công ty, doanh nghiệp vừa và nhỏ, tin tuyển dụng phong phú ở các ngành nghề, các lĩnh vực và nhiều vị trí. Hi vọng trang web tiếp tục hoàn thiện hơn.</p>
                    <p class="name">Nguyễn Hùng</p>
                    <span class="position">Người tìm việc</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(source/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4">...là một trang web nổi tiếng về tuyển dụng và tìm việc làm. Trang web này có nhiều ngành nghề và nhiều vị trí phù hợp cho cả sinh viên, lao động phổ thông hay lao động có chuyên môn. Dịch vụ tốt, hỗ trợ khách hàng nhiệt tình.</p>
                    <p class="name">Long Phạm</p>
                    <span class="position">Nhà phát triển Web</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(source/images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-4"> Bạn có thể tham gia tình nguyện, ứng tuyển vào một vị trí thực tập, tìm một công việc bán hoặc toàn thời gian. Đây là một trang web rất phù hợp cho các bạn sinh viên và các các bạn mới ra trường.. Giao diện thân thiện, dễ dùng.</p>
                    <p class="name">Linh Phạm</p>
                    <span class="position">Sinh viên</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@if(Session::has('user'))
@php
          $user= Session('user');
          $type= DB::table('user')->where('username',$user)->first();
          $mailden= DB::table('mail')->where('To_user',$user)->get();
          $maildi= DB::table('mail')->where('From_user',$user)->get();
          if(($type->type)==2){
        @endphp
       <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
        <h2 class="mb-4">Hộp thư đến({{$mailden->count()}})</h2>
      </div>
    </div>
    <table>
                                              <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">From</th>
                                                    <th scope="col">Subject</th>
                                                   
                                                    <th scope="col">Massage</th>
                                                    
                                                    <th scope="col">Action</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                           @foreach($mailden as $mail1)
                                           <tr>
                                              <td>{{$mail1->From_user}}</td>
                                               <td>{{$mail1->subject}}</td>
                                               <td><article>{!!$mail1->mail!!}</article></td>
                                               <td><a href="sendmail"><button>Trả lời</button></a></td>
                                            </tr>
                                               @endforeach
                                            
                                            </tbody>
              </table>

          <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
        <h2 class="mb-4">Hộp thư đi ({{$maildi->count()}})</h2>
      </div>
    </div>
    <table>
                                              <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">To</th>
                                                    <th scope="col">Subject</th>
                                                   
                                                    <th scope="col">Massage</th>
                                                    
                                            

                                                </tr>
                                            </thead>
                                            <tbody>
                                           @foreach($maildi as $mail1)
                                           <tr>
                                              <td>{{$mail1->To_user}}</td>
                                               <td>{{$mail1->subject}}</td>
                                               <td>{{$mail1->mail}}</td>
                                               
                                            </tr>
                                               @endforeach
                                            
                                            </tbody>
              </table>
    <?php 
      $apply = DB::table('apply')->where('username',session('user'))->get();

    ?>


    <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
        <h2 class="mb-4">Các công việc đã đăng kí </h2>
      </div>
    </div>
    <table>
                                              <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Người đăng</th>
                                                   <th scope="col">Username</th>
                                                    <th scope="col">Công ti</th>
                                                    
                                                    <th scope="col">Trạng thái</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                           @foreach($apply as $row)
                                                <?php $job1=DB::table('job')->where('Id',$row->idJob)->first();
                                                     $user=DB::table('user')->where('username',$job1->idUser)->first(); 
                                                ?>
                                                
                                                 
                                            <tr>
                                              
                                               <td><?php echo($job1->title);?></td>
                                               <td>{{$user->name}}</td>
                                               <td>{{$user->username}}</td>

                                               <td>{{$user->company}}</td>
                                               <td><?php if($row->stateapply == NULL) echo('Chưa xử lí'); else echo($row->stateapply); ?></td>
                                            </tr>
                                               @endforeach
                                            
                                            </tbody>
              </table>
      </div>
      </section> 
        @php
          }
        @endphp
      @endif

		
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Theo dõi để nhận các tin mới nhất</h2>
              <p>Số lượng nhà tuyển dụng cũng như ứng viên tham gia trang này rất lớn.Lượng truy cập hàng ngày lên tới con số hàng trăm nghìn, thậm chí hàng triệu.</p>
              <div class="row d-flex justify-content-center mt-4 mb-4">
                <div class="col-md-8">
                  <form action="{{route('trangchu')}}" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Nhập địa chỉ Email">
                      <input type="submit" value="Theo dõi" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>
@endsection