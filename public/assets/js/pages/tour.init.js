(()=>{var t=new Shepherd.Tour({defaultStepOptions:{cancelIcon:{enabled:!0},classes:"shadow-md bg-purple-dark",scrollTo:{behavior:"smooth",block:"center"}},useModalOverlay:{enabled:!0}});document.querySelector("#logo-tour")&&t.addStep({title:"Welcome Back !",text:"This is Step 1",attachTo:{element:"#logo-tour",on:"bottom"},buttons:[{text:"Next",classes:"btn btn-success",action:t.next}]}),document.querySelector("#register-tour")&&t.addStep({title:"Register your account",text:"Get your Free bumasys account now.",attachTo:{element:"#register-tour",on:"bottom"},buttons:[{text:"Back",classes:"btn btn-light",action:t.back},{text:"Next",classes:"btn btn-success",action:t.next}]}),document.querySelector("#login-tour")&&t.addStep({title:"Login your account",text:"Sign in to continue to bumasys.",attachTo:{element:"#login-tour",on:"bottom"},buttons:[{text:"Back",classes:"btn btn-light",action:t.back},{text:"Next",classes:"btn btn-success",action:t.next}]}),document.querySelector("#getproduct-tour")&&t.addStep({title:"Get yout Product",text:"Sign in to continue to bumasys.",attachTo:{element:"#getproduct-tour",on:"bottom"},buttons:[{text:"Back",classes:"btn btn-light",action:t.back},{text:"Next",classes:"btn btn-success",action:t.next}]}),document.querySelector("#thankyou-tour")&&t.addStep({title:"Thank you !",text:"Sign in to continue to bumasys.",attachTo:{element:"#thankyou-tour",on:"bottom"},buttons:[{text:"Back",classes:"btn btn-light",action:t.back},{text:"Thank you !",classes:"btn btn-primary",action:t.complete}]}),t.start()})();