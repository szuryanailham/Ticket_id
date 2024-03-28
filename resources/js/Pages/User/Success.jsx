import React from "react";

function Success({ order }) {
    return (
        <>
            {order.data.map((item) => (
                <div key={item.id}>
                    <h1>{item.order_id}</h1>
                    <h1>{item.user.name}</h1>
                    <h1>{item.ticket.concert.title}</h1>
                    <h1>{item.quantity}</h1>
                    <h1>
                        {new Intl.NumberFormat("id-ID", {
                            style: "currency",
                            currency: "IDR",
                        }).format(item.subtotal)}
                    </h1>
                </div>
            ))}
        </>
    );
}

export default Success;
