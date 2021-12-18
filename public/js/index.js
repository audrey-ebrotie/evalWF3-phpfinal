let auctionDate = document.getElementsByClassName("auction_dates");
let today = new Date();

if(auctionDate.value < today) {
    auctionDate.style.color = "grey";
}