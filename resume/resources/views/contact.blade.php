<x-layout>
    <x-slot name='title'>Contact</x-slot>
    <x-slot name='content'>
        <div class="container mt-5">
        <h1 class="text-warning mb-5 border-bottom">CONTACT US</h1>
        <div class="row text-white mb-5">
            <p class="mx-auto mb-5">Do you have any questions?Please do not hesitate to contact.I will come back to you with in a metter of hours to help you</p>
            <div class="col-sm-9 mb-5">
                <form action="">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="inputname">Your Name></label>
                            <input type="text" class="form-control mt-2" id="inputname"/>
                        </div>
                        <div class="col-md-6">
                            <label for="inputemail">Your email*</label>
                            <input type="email" class="form-control mt-2" id="inputemail" required/> 
                        </div>
                        <div class="col-md-6">
                            <label for="inputtestarea">Your message*</label>
                            <textarea class="form-control mt-2" id="inputtextarea" required></textarea>
                        </div>
                       <button class="btn btn-primary" type="submit">Send</button>
                    </form>
                    
                    </div>
        
        <div class="col-sm-3 text-center">
            <ul class="list-unstyled">
                <li>
                    <i class="fas fa-map-maker-alt fa-2x i-color mt-2"></i>
                    <p>Ranchi,Jarkhand,India</p>
                </li>
                <li>
                    <i class="fas fa-phone mt-4 fa-2x i-color"></i>
                    <p>+ 91 909000999</p>
                </li>
                <li>
                    <i class="fas fa-envelope mt-4 fa-2x i-color"></i>
                    <p>contact@email.com</p>
                </li>

            </ul>
        </div>
    </div>
        </div>

<div class="text-center">
    <a href="#" target="_blank"><i class="fab fa-twitter i-color mx-3"></i></a>
    <a href="#" target="_blank"><i class="fab fa-facebook-f i-color mx-3"></i></a>
    <a href="#" target="_blank"><i class="fab fa-instagram i-color mx-3"></i></a>
    <a href="#" target="_blank"><i class="fab fa-dribble i-color mx-3"></i></a>
</div>
    </x-slot>

</x-layout>