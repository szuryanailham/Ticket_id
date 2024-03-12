import React from "react";

function TicketCard({ price, quantity }) {
    return (
        <div>
            {/* judul Concert */}
            <h1>ticket Description</h1>
            {/* harga ticket */}
            <p>{`harga ticket : Rp.${price}`}</p>
            {/* Quantity */}
            <p>{`jumlah ticket :${quantity}`}</p>
        </div>
    );
}

export default TicketCard;
