// const webSocket = new WebSocket("ws://192.168.1.2:3000")
const webSocket = new WebSocket("ws://127.0.0.1:3000")

webSocket.onmessage = (event) => {
    handleSignallingData(JSON.parse(event.data))
}

function handleSignallingData(data) {
    switch (data.type) {
        case "answer":
            peerConn.setRemoteDescription(data.answer)
            break
        case "offer":
            peerConn.setRemoteDescription(data.offer)
            createAndSendAnswer()
            break
        case "candidate":
            peerConn.addIceCandidate(data.candidate)
            break
        case "leave":
            closeVideo()
            break
    }
}

let username
function sendUsername(friendID) {

    // username = document.getElementById("username-input").value
    username = friendID;
    sendData({
        type: "store_user"
    })
}

function sendData(data) {
    data.username = username
    webSocket.send(JSON.stringify(data))
}

// Call Video
$('body').on('click','.CallVideo',function(){
    let friendID = $(this).attr('friend-id');
    console.log(friendID);
    startCall(friendID,callID);
    sendUsername(friendID);
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $.ajax({
        url:routeCallvideo,
        method:"POST",
        data :{
            friendID:friendID,
            userID:callID,
        },
        
        success:function(data)
        {
           
            console.log('Calling...');
        },   
    })
});

$('body').on('click','#acceptCallVideo',function(){
    let myID = $(this).attr('my-id');
    console.log(myID);
    // $(".audio_call").trigger('pause');
    $(".audio_call").get(0).pause();
    $(".audio_call").get(0).currentTime = 0;
    joinCall(myID);
});

let localStream
let peerConn
function startCall(friendID,userID) {
    // document.getElementById("video-call-div")
    // .style.display = "inline"
    $('#video-call-div').removeClass('hidden');
    navigator.getUserMedia({
        video: {
            frameRate: 24,
            width: {
                min: 480, ideal: 720, max: 1280
            },
            aspectRatio: 1.33333
        },
        audio: true
    }, (stream) => {
        localStream = stream
        document.getElementById("local-video").srcObject = localStream

        let configuration = {
            iceServers: [
                {
                    "urls": ["stun:stun.l.google.com:19302", 
                    "stun:stun1.l.google.com:19302", 
                    "stun:stun2.l.google.com:19302"]
                }
            ]
        }

        peerConn = new RTCPeerConnection(configuration)
        peerConn.addStream(localStream)

        peerConn.onaddstream = (e) => {
            document.getElementById("remote-video")
            .srcObject = e.stream
        }

        peerConn.onicecandidate = ((e) => {
            if (e.candidate == null)
                return
            sendData({
                type: "store_candidate",
                candidate: e.candidate
            })
        })

        createAndSendOffer()
    }, (error) => {
        console.log(error)
    })
}

function createAndSendOffer() {
    peerConn.createOffer((offer) => {
        sendData({
            type: "store_offer",
            offer: offer
        })

        peerConn.setLocalDescription(offer)
    }, (error) => {
        console.log(error)
    })
}

function closeVideo()
{
    sendData({
        type: "leave" ,
    })
    // document.getElementById("video-call-div")
    // .style.display = "none";
    handleLeave(); 
}

function handleLeave() { 
    var track = localStream.getTracks()[0]; 
        track.stop();
    peerConn.close();
    peerConn.onicecandidate = null; 
    peerConn.onaddstream = null; 
 };
let isAudio = true
function muteAudio() {
    isAudio = !isAudio
    localStream.getAudioTracks()[0].enabled = isAudio
}

let isVideo = true
function muteVideo() {
    isVideo = !isVideo
    localStream.getVideoTracks()[0].enabled = isVideo
}

// reply for call
function createAndSendAnswer () {
    peerConn.createAnswer((answer) => {
        peerConn.setLocalDescription(answer)
        sendData({
            type: "send_answer",
            answer: answer
        })
    }, error => {
        console.log(error)
    })
}


function joinCall(userID) {

    // username = document.getElementById("username-input").value
    username =  userID
    document.getElementById("video-call-div")
    .style.display = "inline"
    $('.closeVideoCall').click();
    navigator.getUserMedia({
        video: {
            frameRate: 24,
            width: {
                min: 480, ideal: 720, max: 1280
            },
            aspectRatio: 1.33333
        },
        audio: true
    }, (stream) => {
        localStream = stream
        document.getElementById("local-video").srcObject = localStream

        let configuration = {
            iceServers: [
                {
                    "urls": ["stun:stun.l.google.com:19302", 
                    "stun:stun1.l.google.com:19302", 
                    "stun:stun2.l.google.com:19302"]
                }
            ]
        }

        peerConn = new RTCPeerConnection(configuration)
        peerConn.addStream(localStream)

        peerConn.onaddstream = (e) => {
            document.getElementById("remote-video")
            .srcObject = e.stream
        }

        peerConn.onicecandidate = ((e) => {
            if (e.candidate == null)
                return
            
            sendData({
                type: "send_candidate",
                candidate: e.candidate
            })
        })

        sendData({
            type: "join_call"
        })

    }, (error) => {
        console.log(error)
    })
}
