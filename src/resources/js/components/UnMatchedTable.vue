<template>
    <div class="row justify-content-center mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header flex-col justify-content-between">
                    <div>UnMatched Data With Duplicates</div>
                </div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Source B Data</th>
                            <th scope="col">Select from Source B Duplicate</th>
                            <th scope="col">Action</th>
                            <th scope="col">Save</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr v-for="(customerId, index) in Object.keys(customerWithDuplicateObj)">
                            <th>{{customerWithDuplicateObj[customerId][0].name || "" }}</th>
                            <td>
                                <template v-if="selectedCustomer[customerId]"
                                          v-for="fieldName in Object.keys(selectedCustomer[customerId] || '')"
                                >
                                    <div>
                                        <span>{{fieldName}}: {{selectedCustomer[customerId][fieldName]}}</span>
                                    </div>
                                </template>
                            </td>
                            <td>
                                <select @change="setSelectedCustomer($event.target.value, customerId)" class="form-control" id="exampleFormControlSelect1">
                                    <option value="">Select</option>
                                    <option v-for="(customer, index) in customerWithDuplicateObj[customerId]" :value="customer.id">
                                        {{ customer.id }}
                                    </option>
                                </select>
                            </td>
                            <td>
                                <div class="ml-2">
                                    <input class="form-check-input"
                                           type="radio"
                                           :name="customerId + 'action'"
                                           :id="customerId + '-ignore'"
                                           value="ignore"
                                           v-model="selectedAction[customerId]"
                                           :disabled="!selectedCustomer[customerId]"
                                    >
                                    <label class="form-check-label" :for="customerId + '-ignore'">
                                        Ignore
                                    </label>
                                </div>
                                <div class="ml-2">
                                    <input class="form-check-input"
                                           type="radio"
                                           :name="customerId + 'action'"
                                           :id="customerId + '-delete'"
                                           value="delete"
                                           v-model="selectedAction[customerId]"
                                           :disabled="!selectedCustomer[customerId]"
                                    >
                                    <label class="form-check-label" :for="customerId + '-delete'">
                                        Delete from source
                                    </label>
                                </div>
                            </td>
                            <td>
                                <button
                                    type="button"
                                    class="btn btn-primary"
                                    @click="save(customerId)"
                                    :disabled="!selectedAction[customerId]"
                                >
                                    Save
                                </button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: {
            customers: {
                default: () => [],
                type: Array
            }
        },
        computed: {
            customerWithDuplicateObj() {
                return this.customers.reduce((prev, customer) => {
                    if(this.removedSourceB.includes(customer.source_b.id)) {
                        return prev;
                    }
                    const sourceB = Object.assign({},
                        {customer_id: customer.id},
                        customer.source_b,
                        { details: JSON.parse((customer.source_b || {}).details || "") }
                    );
                    (prev[customer.idSourceA] = prev[customer.idSourceA] || []).push(sourceB);
                    return prev;
                }, {})
            },
        },
        watch: {
            customerWithDuplicateObj:{
                immediate: true,
                handler(val) {
                    if(val) {
                        this.$set(this.selectedCustomer, {})
                    }
                }
            }
        },
        data() {
            return {
                selectedCustomer: {},
                selectedAction: {},
                removedSourceB: []
            }
        },

        methods: {
            setSelectedCustomer(selectedCustomerId, sourceAId) {
                if(!selectedCustomerId) {
                    this.$set(this.selectedCustomer, sourceAId, null)
                    this.$set(this.selectedAction, sourceAId, null)
                    return;
                }
                const foundCustomer = this.customerWithDuplicateObj[sourceAId].find((i) => i.id === selectedCustomerId)
                this.$set(this.selectedCustomer, sourceAId, foundCustomer.details)
            },
            delete(customerId) {
                window.alert("Deleted!")
            },
            updateCustomer(customerId, sourceBId) {
                axios.put('/api/customers/' + customerId, {active: 0})
                    .then(res => {
                        this.removedSourceB.push(sourceBId)
                    })
            },
            save(sourceAId) {
                if(!this.selectedCustomer[sourceAId] || !this.selectedAction[sourceAId]
                ) {
                    window.alert("Please select from source B and choose an action to perform.")
                    return;
                }

                const sourceBId = (this.selectedCustomer[sourceAId] || {}).ACCOUNTID;
                const customerData = this.customers.find(i => i.idSourceB === sourceBId)

                if(this.selectedAction[sourceAId] === 'delete') {
                    this.delete(sourceBId);
                    this.removedSourceB.push(sourceBId)
                }

                if(this.selectedAction[sourceAId] === 'ignore') {
                    this.updateCustomer(customerData.id, sourceBId);
                }

                this.selectedCustomer[sourceAId] = {}
                this.selectedAction[sourceAId] = ""
            }
        }
    }
</script>
