import TicketCard from "@/Components/TicketCard";
import { useForm } from "@inertiajs/react";
import React, { useEffect, useState } from "react";
function OrderTicketPage({ ticket, detail }) {
    const { data, setData, post, processing, errors } = useForm({
        order_id: 0,
        user_id: 0,
        ticket_id: ticket.id,
        quantity: 0,
        subtotal: 0,
        remember: false,
    });
    const onHandleChange = (event) => {
        const quantityValue = parseInt(event.target.value, 10);
        setData(event.target.name, quantityValue);
    };
    useEffect(() => {
        const newData = {
            ...data,
            subtotal: ticket.price * data.quantity,
        };
        setData(newData);
    }, [data.quantity]);

    const handleSubmit = (e) => {
        e.preventDefault();
        post("/checkout", {
            onSuccess: () => {
                console.log("sukses bang");
            },
            onError: (errors) => {
                console.log(errors);
            },
        });
    };
    return (
        <>
            <div>
                <h1>{detail.title}</h1>
                <TicketCard price={ticket.price} quantity={ticket.quantity} />
                <form onSubmit={handleSubmit}>
                    <div>
                        <label htmlFor="quantity">jumlah pesan ticket</label>
                        <input
                            id="quantity"
                            type="number"
                            name="quantity"
                            onChange={(e) => onHandleChange(e)}
                        />
                    </div>

                    <div>
                        <label htmlFor="price">total price</label>
                        <input
                            type="number"
                            name="subtotal"
                            value={data.subtotal}
                            onChange={(e) => onHandleChange(e)}
                            readOnly
                        />
                    </div>

                    <button
                        className="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                        type="submit"
                    >
                        Order
                    </button>
                </form>
            </div>
        </>
    );
}

export default OrderTicketPage;
