import React from "react";

function Success({ order }) {
    console.log(order.data);
    return (
        <>
            {order.data.map((item) => (
                <div key={item.id}>
                    <h1>{item.order_id}</h1>
                    <h1>{item.user.name}</h1>
                    <h1>{item.ticket.concert.title}</h1>
                    <h1>{item.quantity}</h1>
                    <h1>{item.subtotal}</h1>
                </div>
            ))}
        </>
    );
}

export default Success;
