<div class="align-self-center pl-4 pt-2">
    <a href="#" class="btn btn-success p-1" data-toggle="modal" data-target="#mymodal"> <h4> Send Email 
      <i class="fab fa-angellist"></i></h4>
    </a>
</div>

<div class="modal" id="mymodal">
    <div class="modal-dialog">
        <div class="modal-content">
               <div class="modal-header">
                   <h4 class="modal-title">Email Form <i class="fas fa-mail-bulk  text-danger  "></i></h4>
                   <button class="close" data-dismiss="modal">&times;</button>
               </div>

               <div class="modal-body">
               <form action="{{route('send.email')}}" method="post">
                       @csrf
                       <div class="form-group">
                        <input type="text" class="form-control m-1" name="name" id="" aria-describedby="emailHelpId" placeholder="Your Name.." required>
                        <input type="email" class="form-control m-1" name="email" id="" aria-describedby="emailHelpId" placeholder="Your Email.." required>
                        <input type="text" name="subject" class="form-control m-1" placeholder="Subject.." required>
                        <textarea class="form-control m-1" name="message"  cols="30" rows="10" placeholder="Message" required></textarea>
                        <button type="submit" class="btn btn-primary m-1">Submit</button>    
                    </div>
                   </form>
               </div>
               
               
        </div>
    </div>
</div>